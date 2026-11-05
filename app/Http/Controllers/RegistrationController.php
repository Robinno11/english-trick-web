<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Store a new course registration or consultation inquiry.
     *
     * @return JsonResponse|RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'whatsapp' => 'required|string|max:30',
            'email' => 'nullable|email|max:100',
            'program_id' => 'nullable|exists:programs,id',
            'learning_mode' => 'nullable|in:offline,online,privat',
            'preferred_schedule' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        $programName = 'Konsultasi Umum';
        if (! empty($validated['program_id'])) {
            $prog = Program::find($validated['program_id']);
            if ($prog) {
                $programName = $prog->name;
            }
        }

        $registration = Registration::create([
            'name' => $validated['name'],
            'whatsapp' => $validated['whatsapp'],
            'email' => $validated['email'] ?? null,
            'program_id' => $validated['program_id'] ?? null,
            'program_name' => $programName,
            'learning_mode' => $validated['learning_mode'] ?? 'offline',
            'preferred_schedule' => $validated['preferred_schedule'] ?? 'Reguler Sore',
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        $learningModeLabel = match ($registration->learning_mode) {
            'online' => 'Kelas Daring (Online)',
            'privat' => 'Privat 1-on-1 (Guru ke Rumah/Online)',
            default => 'Kelas Tatap Muka (Offline Karangbong)',
        };

        // WhatsApp redirect URL
        $waNumber = '6285385120633';
        $waText = "Halo Admin English Trick Karangbong! 👋\n\n"
            ."Saya ingin mendaftar / konsultasi program kursus:\n"
            ."• *Nama Lengkap:* {$registration->name}\n"
            ."• *No. WhatsApp:* {$registration->whatsapp}\n"
            ."• *Program Diminati:* {$programName}\n"
            ."• *Metode Belajar:* {$learningModeLabel}\n"
            .'• *Pilihan Waktu:* '.($registration->preferred_schedule ?: 'Fleksibel')."\n";

        if (! empty($registration->message)) {
            $waText .= "• *Catatan/Pesan:* {$registration->message}\n";
        }

        $waText .= "\nMohon info jadwal kelas terdekat dan promo biaya pendaftaran. Terima kasih!";

        $waUrl = "https://api.whatsapp.com/send?phone={$waNumber}&text=".urlencode($waText);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Pendaftaran Anda berhasil dikirim! Silakan lanjutkan ke WhatsApp untuk respon langsung.',
                'registration_id' => $registration->id,
                'whatsapp_url' => $waUrl,
            ]);
        }

        return redirect()->away($waUrl);
    }
}
