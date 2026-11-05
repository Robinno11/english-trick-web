<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the company profile landing page.
     *
     * @return View
     */
    public function index()
    {
        $programs = Program::orderBy('order')->get();

        $tutors = [
            [
                'name' => 'Mr. Eksan',
                'role' => 'Founder & Master Speaking Coach',
                'certification' => 'TESOL Certified • Speaking Coach Specialist',
                'avatar' => asset('images/tutors/mr-eksan.jpeg'),
                'quote' => 'No Trick, No Speak! Saat kamu tahu formula kalimatnya, bahasa Inggris semudah bernapas.',
                'specialty' => 'Speaking Booster & Adult Conversation',
            ],
            [
                'name' => 'Ms. Zoey',
                'role' => 'Head of Kids & Young Learners',
                'certification' => 'Cambridge Early Childhood Specialist • Phonics Master',
                'avatar' => asset('images/tutors/ms-zoey.jpeg'),
                'quote' => 'Setiap anak adalah pencerita hebat. Tugas kami mengubah rasa malu jadi tawa dan keberanian.',
                'specialty' => 'Kids Phonics & Fun Interactive Play',
            ],
            [
                'name' => 'Ms. Tiara',
                'role' => 'Teenagers & Public Speaking Coach',
                'certification' => 'Youth Communication Specialist • Active Speaking',
                'avatar' => asset('images/tutors/ms-tiara.jpeg'),
                'quote' => 'Remaja butuh ruang ekspresi yang aman dan seru agar bahasa Inggris jadi kebiasaan alami.',
                'specialty' => 'Presentation Skills & School Prep',
            ],
            [
                'name' => "Ms. Ni'ma",
                'role' => 'Senior TOEFL / IELTS Strategist',
                'certification' => 'Academic Test Specialist • Fast-Track Mentor',
                'avatar' => asset('images/tutors/ms-nima.jpeg'),
                'quote' => 'Mengerjakan TOEFL bukan soal menebak, tapi membaca pola trik pembuat soal.',
                'specialty' => 'TOEFL ITP/iBT, IELTS, & LPDP Interview',
            ],
            [
                'name' => 'Ms. Arin',
                'role' => 'General English & Vocabulary Coach',
                'certification' => 'Practical English Educator • Communicative Method',
                'avatar' => asset('images/tutors/ms-arin.jpeg'),
                'quote' => 'Kunci percaya diri berbahasa Inggris adalah konsistensi dan metode trik yang tepat.',
                'specialty' => 'Daily Conversation & Vocabulary Flow',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Calvin Khalief Hadi Sapoetra',
                'category' => 'Siswa English Trick (Level 6)',
                'rating' => 5,
                'avatar' => asset('images/testimonials/calvin.jpg'),
                'text' => 'Saya les di English Trick sejak level 1 hingga sekarang sedang menempuh level 6. Les di ET, aku jadi lebih percaya diri public speaking. Di setiap kenaikan level, English Trick ada tes nya loh! Saya ikut Benchmark Test yang diadakan oleh Pearson Education UK.',
            ],
            [
                'name' => 'Mama Afiza, Marda dan Adara',
                'category' => 'Orang Tua Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/mama-afiza.jpg'),
                'text' => 'Afiza les di English Trick sejak SD hingga sekarang SMP. Dua adeknya juga saya leskan di English Trick. Belajar bahasa Inggris, saya percaya English Trick!',
            ],
            [
                'name' => 'Adzkia Vianna K',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/adzkia.jpg'),
                'text' => 'Aku suka banget belajar Bahasa Inggris di English Trick! Metodenya seru dan nggak ngebosenin. Belajarnya sambil main, jadi aku seneng banget dan makin semangat. Pokoknya belajar di sini itu fun dan interaktif!',
            ],
            [
                'name' => 'Rafael Putra',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/rafael.jpg'),
                'text' => 'Dulu aku takut ngomong Bahasa Inggris, tapi setelah les di English Trick jadi lebih berani dan lancar. Gurunya baik dan sabar. Materinya mudah dimengerti. Recommended banget!',
            ],
            [
                'name' => 'Nayla Putri',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/nayla.jpg'),
                'text' => 'Belajar di English Trick bikin aku makin percaya diri buat ngomong Bahasa Inggris. Kelasnya seru, temen-temennya juga asik. Aku jadi suka Bahasa Inggris sekarang!',
            ],
            [
                'name' => 'Daffa Almer',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/daffa.jpg'),
                'text' => 'Gurunya menjelaskan dengan cara yang sederhana dan mudah dipahami. Latihannya juga banyak dan fun. Sekarang nilai Bahasa Inggris ku di sekolah jadi lebih bagus!',
            ],
            [
                'name' => 'Salsabila Hani',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/salsabila.jpg'),
                'text' => 'English Trick bukan cuma ngajarin grammar, tapi juga bikin kita berani speaking. Aku suka banget sama kelasnya yang interaktif dan penuh aktivitas menarik!',
            ],
            [
                'name' => 'Kevin Wijaya',
                'category' => 'Siswa English Trick',
                'rating' => 5,
                'avatar' => asset('images/testimonials/kevin.jpg'),
                'text' => 'Aku jadi lebih ngerti dan bisa ngobrol pakai Bahasa Inggris setelah les di sini. Tempatnya nyaman, gurunya ramah, dan cara ngajarnya keren banget!',
            ],
            [
                'name' => 'Mama Akhdan',
                'category' => 'Orang Tua Siswa (SD Amanatul Ummah)',
                'rating' => 5,
                'avatar' => asset('images/testimonials/mama-akhdan.jpg'),
                'text' => 'Saya mengikuti les privat di English Trick selama dua minggu. Tujuannya untuk meningkatkan kualitas pendidikan bahasa Inggris di sekolahnya, di SD Amanatul Ummah. Dua minggu ini, banyak sekali kemajuan yang didapatkan oleh Adan terkait speaking English-nya. Akhdan juga dapat mengikuti perlombaan pidato bahasa Inggris yang pertama kalinya. Mudah-mudahan mendapatkan juara, dan mudah-mudahan English Trick juga dapat membuka cabang di area keboan. Terima kasih.',
            ],
            [
                'name' => 'Mama Nahla',
                'category' => 'Orang Tua Siswa',
                'rating' => 5,
                'avatar' => asset('images/testimonials/mama-nahla.jpg'),
                'text' => 'Semenjak anak saya Nahla Azhara les di English Trick, dia sangat percaya diri. Kemudian sangat berkembang untuk cara berpikirnya, semakin lancar bahasa Inggrisnya dan di sekolahan dia mendapatkan ranking satu semenjak les di English Trick ini. Oke, terima kasih.',
            ],
            [
                'name' => 'Mama Kelvin',
                'category' => 'Orang Tua Siswa',
                'rating' => 5,
                'avatar' => asset('images/testimonials/mama-kelvin.jpg'),
                'text' => 'Saya dengan nama Kelvin ingin belajar English dengan cara yang seru, dengan cara yang baru, English Trip solusinya. semenjak anaknya Kelvin gabung di English Trip, luar biasa, anaknya lebih PD, sering ikut lomba stroytelling, dan luar biasa dia percaya dirinya juga semakin berkembang, semakin meningkat, dan prestasi di sekolah juga alhamdulillah meningkat. Sukses terus untuk English Trip, semoga semakin lebih baik dan upgrade terus kualitas-kualitas untuk program-program di English Trip. Terima kasih.',
            ],
            [
                'name' => 'Mama Alzia',
                'category' => 'Orang Tua Siswa',
                'rating' => 5,
                'avatar' => asset('images/testimonials/mama-alzia.jpg'),
                'text' => 'Saya sangat senang melihat perkembangan Alzia selama belajar di English Trick. Program pembelajaran yang diberikan membantu menambah kosakata dan meningkatkan kemampuan Alzia dalam berbahasa Inggris. Saya berharap ke depannya Alzia dapat semakin percaya diri, semakin lancar berbicara dalam bahasa Inggris, serta terus berkembang melalui pembelajaran yang berkualitas. Tetap semangat untuk semua siswa, terus belajar dan berlatih agar dapat meraih hasil yang terbaik di masa depan.',
            ],
        ];

        $faqs = [
            [
                'question' => 'Mengapa slogannya "English Trick: No Trick, No Speak"?',
                'answer' => 'Karena banyak orang belajar bahasa Inggris bertahun-tahun menghafal rumus grammar tapi tetap macet saat berbicara. Di English Trick, kami mengajarkan "Tricks" (formula praktis, phonics cerdas, dan kebiasaan respon cepat) yang membuat siswa langsung bisa berbicara aktif sejak sesi pertama tanpa rasa takut salah.',
            ],
            [
                'question' => 'Apakah ada tes penempatan level sebelum mulai kelas?',
                'answer' => 'Ya! Kami menyediakan Placement Test & Quiz gratis baik secara online di website ini maupun offline di center kami di Damarsi Sidoarjo. Hasil analisis level CEFR langsung keluar seketika beserta rekomendasi kelas.',
            ],
            [
                'question' => 'Berapa jumlah siswa dalam 1 kelas reguler?',
                'answer' => 'Kami mengutamakan metode Small Class dengan maksimal 6 hingga 8 siswa per kelompok agar setiap siswa mendapat porsi waktu berbicara minimal 60% dari durasi kelas. Kami juga menyediakan kelas Privat 1-on-1.',
            ],
            [
                'question' => 'Di mana lokasi cabang English Trick?',
                'answer' => 'Pusat kami berlokasi di Damarsi, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur (Dekat kawasan pendidikan dan perumahan strategis). Anda dapat melihat lokasi Google Maps langsung di bagian bawah website ini.',
            ],
            [
                'question' => 'Apakah ada garansi belajar?',
                'answer' => 'Ya! English Trick memberikan Garansi Lancar Bicara & Bimbingan Ulang Gratis jika siswa telah mengikuti minimal 85% kehadiran namun belum mencapai target kompetensi levelnya.',
            ],
        ];

        $location = [
            'name' => 'English Trick Damarsi Sidoarjo',
            'address' => 'Damarsi, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252',
            'phone' => '+62 853-8512-0633',
            'whatsapp' => '6285385120633',
            'email' => 'halo@englishtrick.com',
            'hours' => 'Senin - Sabtu: 08.30 - 20.00 WIB | Minggu: Sesuai Janji Temu',
            'maps_embed_url' => 'https://maps.google.com/maps?q=-7.4102,112.7599558&hl=id&z=17&output=embed',
            'maps_direct_url' => 'https://maps.app.goo.gl/gYsuyTMwArGPVSi36',
            'latitude' => -7.4102,
            'longitude' => 112.7599558,
        ];

        $branches = [
            [
                'number' => '01',
                'name' => 'Karangbong',
                'address' => 'Perum. Karangbong Indah No 8, Rw. 8, Karangbong, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254',
                'phone' => '0853-8512-0633',
                'whatsapp' => '6285385120633',
                'maps_url' => 'https://maps.google.com/?q=Perum.+Karangbong+Indah+No+8+Gedangan+Sidoarjo',
                'color' => 'pink',
                'bg_pill' => 'bg-pink-500 hover:bg-pink-600 text-white',
            ],
            [
                'number' => '02',
                'name' => 'Damarsi',
                'address' => 'Ruko Graha Juada No.A13, Area Sawah, Damarsi, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252',
                'phone' => '0813-2647-0060',
                'whatsapp' => '6281326470060',
                'maps_url' => 'https://maps.google.com/?q=Ruko+Graha+Juada+No.A13+Damarsi+Buduran+Sidoarjo',
                'color' => 'blue',
                'bg_pill' => 'bg-sky-500 hover:bg-sky-600 text-white',
            ],
            [
                'number' => '03',
                'name' => 'Taman Pondok Jati',
                'address' => 'Jl. Taman Pd. Jati No.7A A Blok A No, Geluran, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257',
                'phone' => '0878-6717-0098',
                'whatsapp' => '6287867170098',
                'maps_url' => 'https://maps.google.com/?q=Jl.+Taman+Pd.+Jati+No.7A+Geluran+Taman+Sidoarjo',
                'color' => 'emerald',
                'bg_pill' => 'bg-emerald-600 hover:bg-emerald-700 text-white',
            ],
        ];

        return view('home', compact('programs', 'tutors', 'testimonials', 'faqs', 'location', 'branches'));
    }

    /**
     * Display a specific program detail.
     *
     * @return View
     */
    public function program(string $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $otherPrograms = Program::where('id', '!=', $program->id)->take(3)->get();

        return view('program-detail', compact('program', 'otherPrograms'));
    }
}
