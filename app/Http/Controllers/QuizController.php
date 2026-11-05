<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use App\Models\QuizSubmission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizController extends Controller
{
    /**
     * Show the interactive quiz page.
     *
     * @return View
     */
    public function index()
    {
        return view('quiz');
    }

    /**
     * Get list of questions by age/category.
     *
     * @return JsonResponse
     */
    public function getQuestions(Request $request)
    {
        $category = $request->query('category', 'kids');

        if (! in_array($category, ['kids', 'teens', 'adults'])) {
            $category = 'kids';
        }

        $questions = QuizQuestion::where('category', $category)
            ->orderBy('order')
            ->select(['id', 'category', 'question', 'sub_text', 'emoji', 'options', 'speech_text', 'skill_focus', 'order'])
            ->get();

        return response()->json([
            'status' => 'success',
            'category' => $category,
            'total' => $questions->count(),
            'questions' => $questions,
        ]);
    }

    /**
     * Evaluate quiz submission and save result.
     *
     * @return JsonResponse
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'whatsapp' => 'required|string|max:30',
            'has_bimbel' => 'nullable|string|max:50',
            'bimbel_duration' => 'nullable|string|max:100',
            'branch' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'category' => 'required|in:kids,teens,adults',
            'answers' => 'required|array',
        ]);

        $category = $validated['category'];
        $userAnswers = $validated['answers'];
        $hasBimbel = $validated['has_bimbel'] ?? 'Belum';
        $bimbelDuration = ($hasBimbel === 'Sudah') ? ($validated['bimbel_duration'] ?? '-') : '-';
        $branch = $validated['branch'] ?? 'Damarsi';

        $questions = QuizQuestion::where('category', $category)
            ->orderBy('order')
            ->get();

        if ($questions->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada pertanyaan tersedia untuk kategori ini.',
            ], 404);
        }

        $totalQuestions = $questions->count();
        $correctCount = 0;

        $skillStats = [
            'vocabulary' => ['total' => 0, 'correct' => 0],
            'grammar' => ['total' => 0, 'correct' => 0],
            'speaking' => ['total' => 0, 'correct' => 0],
        ];

        $reviewItems = [];

        foreach ($questions as $q) {
            $skill = $q->skill_focus ?? 'speaking';
            if (! isset($skillStats[$skill])) {
                $skillStats[$skill] = ['total' => 0, 'correct' => 0];
            }
            $skillStats[$skill]['total']++;

            $userChoice = isset($userAnswers[$q->id]) ? (int) $userAnswers[$q->id] : null;
            $isCorrect = ($userChoice !== null && $userChoice === $q->correct_index);

            if ($isCorrect) {
                $correctCount++;
                $skillStats[$skill]['correct']++;
            }

            $reviewItems[] = [
                'id' => $q->id,
                'question' => $q->question,
                'emoji' => $q->emoji,
                'options' => $q->options,
                'user_choice' => $userChoice,
                'correct_index' => $q->correct_index,
                'is_correct' => $isCorrect,
                'trick_tip' => $q->trick_tip,
                'skill_focus' => $skill,
            ];
        }

        $score = (int) round(($correctCount / $totalQuestions) * 100);

        // Determine CEFR level based on category and score
        $cefrLevel = $this->determineCefrLevel($category, $score);
        $recommendedProgram = $this->determineRecommendedProgram($category, $score);

        $skillBreakdown = [];
        foreach ($skillStats as $skill => $data) {
            $skillBreakdown[$skill] = $data['total'] > 0
                ? (int) round(($data['correct'] / $data['total']) * 100)
                : 100;
        }

        $notes = "Hasil placement test: {$correctCount}/{$totalQuestions} benar ({$score}%). Rekomendasi level: {$cefrLevel}. Bimbel: {$hasBimbel} ({$bimbelDuration}). Cabang: {$branch}.";

        $submission = QuizSubmission::create([
            'name' => $validated['name'],
            'whatsapp' => $validated['whatsapp'],
            'has_bimbel' => $hasBimbel,
            'bimbel_duration' => ($hasBimbel === 'Sudah') ? $validated['bimbel_duration'] : null,
            'branch' => $branch,
            'email' => $validated['email'] ?? null,
            'category' => $category,
            'total_questions' => $totalQuestions,
            'correct_answers' => $correctCount,
            'score' => $score,
            'cefr_level' => $cefrLevel,
            'recommended_program' => $recommendedProgram['title'],
            'answers' => $userAnswers,
            'skill_breakdown' => $skillBreakdown,
            'notes' => $notes,
        ]);

        // Build WhatsApp message
        $waNumber = '6285385120633';
        $waText = "Halo Admin English Trick Karangbong! 👋\n\n"
            ."Saya baru saja menyelesaikan *Tes Kemampuan Kamu Disini* di website:\n\n"
            ."📋 *Placement test identitas:*\n"
            ."• *Nama:* {$validated['name']}\n"
            ."• *No Wa:* {$validated['whatsapp']}\n"
            ."• *Bimbel?:* {$hasBimbel}\n"
            ."• *If sudah berapa lama?:* {$bimbelDuration}\n"
            ."• *Pilih cabang terdekat:* {$branch}\n"
            ."• *Nilai (setelah selesai tes):* {$score}% ({$correctCount}/{$totalQuestions} Benar)\n\n"
            ."🎯 *Hasil Penilaian:*\n"
            .'• *Kategori Usia:* '.ucfirst($category)."\n"
            ."• *Estimasi Level CEFR:* {$cefrLevel}\n"
            ."• *Rekomendasi Kelas:* {$recommendedProgram['title']}\n\n"
            ."Saya ingin konsultasi jadwal kelas & klaim *Sesi Free Trial / Promo Pendaftaran* di cabang {$branch}. Terima kasih!";

        $waUrl = "https://api.whatsapp.com/send?phone={$waNumber}&text=".urlencode($waText);

        return response()->json([
            'status' => 'success',
            'submission_id' => $submission->id,
            'name' => $validated['name'],
            'whatsapp' => $validated['whatsapp'],
            'has_bimbel' => $hasBimbel,
            'bimbel_duration' => $bimbelDuration,
            'branch' => $branch,
            'score' => $score,
            'correct_answers' => $correctCount,
            'total_questions' => $totalQuestions,
            'cefr_level' => $cefrLevel,
            'recommended_program' => $recommendedProgram,
            'skill_breakdown' => $skillBreakdown,
            'review_items' => $reviewItems,
            'whatsapp_url' => $waUrl,
        ]);
    }

    /**
     * Map score and category to CEFR level.
     */
    private function determineCefrLevel(string $category, int $score): string
    {
        if ($category === 'kids') {
            if ($score >= 80) {
                return 'Pre-A1 Starters (Siap Level A1 Movers)';
            }
            if ($score >= 50) {
                return 'Early Explorer (Pre-A1 Starters)';
            }

            return 'Foundation Phonics Beginner';
        }

        if ($category === 'teens') {
            if ($score >= 85) {
                return 'B1 Preliminary (Confident Teen Speaker)';
            }
            if ($score >= 60) {
                return 'A2 Flyers (Developing Fluency)';
            }

            return 'A1 Elementary (Needs Trick-to-Speak Boost)';
        }

        // Adults
        if ($score >= 85) {
            return 'B2 Vantage (Upper Intermediate - Ready for Fluency)';
        }
        if ($score >= 65) {
            return 'B1 Threshold (Independent Everyday Speaker)';
        }
        if ($score >= 40) {
            return 'A2 Waystage (Basic Communicator)';
        }

        return 'A1 Starter (Ready for No Trick No Speak Method)';
    }

    /**
     * Map category and score to recommended English Trick program.
     */
    private function determineRecommendedProgram(string $category, int $score): array
    {
        if ($category === 'kids') {
            return [
                'title' => 'English for Kids (Phonics, Storytelling & Fun Play)',
                'badge' => 'Pilihan Terbaik untuk Buah Hati',
                'description' => 'Metode gamifikasi dan lagu ceria yang merangsang anak berani berbicara bahasa Inggris secara alami tanpa takut salah!',
                'slug' => 'english-for-kids',
            ];
        }

        if ($category === 'teens') {
            return [
                'title' => 'English for Teens (Junior & High School Booster)',
                'badge' => 'Populer untuk Pelajar SMP & SMA',
                'description' => 'Trik jitu percakapan gaul, public speaking presentasi, dan rumus kilat nilai ujian sekolah auto ranking atas!',
                'slug' => 'english-for-teens',
            ];
        }

        if ($score >= 80) {
            return [
                'title' => 'TOEFL & IELTS Fast-Track / Advanced Speaking',
                'badge' => 'Siap Tembus Skor Tinggi & Beasiswa',
                'description' => 'Kuasai trik eliminasi soal kilat dan percakapan level profesional untuk karier dan studi luar negeri.',
                'slug' => 'toefl-ielts-fast-track',
            ];
        }

        return [
            'title' => 'General English & Speaking Booster (No Trick, No Speak)',
            'badge' => 'Program Unggulan Dewasa & Mahasiswa',
            'description' => 'Metode 80% praktik bicara langsung dengan formula kalimat instan. Dijamin dalam 1 bulan sudah berani aktif berbicara!',
            'slug' => 'speaking-booster-adults',
        ];
    }
}
