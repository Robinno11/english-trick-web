@extends('layouts.app')

@section('title', 'English Trick | No Trick, No Speak - Kursus Bahasa Inggris Terbaik Damarsi Sidoarjo')

@section('content')

<!-- 1. HERO SECTION -->
<section id="beranda" class="reveal-section relative overflow-hidden gradient-hero pt-10 pb-20 lg:pt-16 lg:pb-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Text -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left reveal-child reveal-delay-1">
                
                <!-- Badge Pill -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-100/80 border border-cyan-300 text-et-cyan-dark text-xs sm:text-sm font-extrabold shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-et-pink animate-ping"></span>
                    <span>Lembaga Kursus Bahasa Inggris #1 di Damarsi Sidoarjo</span>
                </div>

                <!-- Main Slogan & Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.15]">
                    Belajar Bahasa Inggris Asyik, <br class="hidden sm:inline">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-et-cyan via-teal-500 to-et-pink">
                        Langsung Lancar Bicara!
                    </span>
                </h1>

                <!-- Slogan Highlight Box -->
                <div class="inline-block bg-gradient-to-r from-pink-600 via-rose-600 to-pink-700 text-white px-5 py-2.5 rounded-2xl shadow-md text-left">
                    <p class="text-xs sm:text-sm font-black tracking-wider uppercase font-display">
                        ENGLISH TRICK: NO TRICK, NO SPEAK!
                    </p>
                    <p class="text-xs text-pink-100 mt-0.5 font-medium">
                        Belajar dengan cara yang praktis, seru, dan langsung dipraktikkan.
                    </p>
                </div>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Bongkar trik rahasia menguasai skil bahasa Inggris tanpa mikir rumus grammar yang rumit. Program lengkap dimulai dari anak usia 3 tahun, remaja, mahasiswa dan dewasa dengan kurikulum internasional berstandar GSE & CEFR dan teachers bersertifikat resmi.
                </p>

                <!-- Partner & Framework Badges -->
                <div class="flex items-center gap-6 pt-1 flex-wrap justify-center lg:justify-start">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" alt="English Trick" class="h-8 w-8 object-contain">
                        <div class="text-left">
                            <span class="text-xs font-black tracking-tight text-slate-900 block leading-tight">ENGLISH TRICK</span>
                            <span class="text-[9px] text-et-pink font-extrabold uppercase tracking-wider block">NO TRICK, NO SPEAK</span>
                        </div>
                    </div>
                    <div class="h-6 w-px bg-slate-300 hidden sm:block"></div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-cefr.jpg') }}" alt="CEFR Logo" class="h-8 w-auto object-contain">
                        <div class="text-left">
                            <span class="text-xs font-black tracking-tight text-slate-900 block leading-tight">CEFR</span>
                            <span class="text-[8px] text-slate-500 font-bold uppercase tracking-wider block">Common European Framework</span>
                        </div>
                    </div>
                    <div class="h-6 w-px bg-slate-300 hidden sm:block"></div>
                    <div class="flex items-center gap-2">
                        <span class="text-lg font-black text-teal-600 tracking-tight">GSE</span>
                        <div class="text-left">
                            <span class="text-[8px] text-slate-500 font-bold uppercase tracking-wider block">Global Scale of English</span>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="{{ route('quiz.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-7 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-extrabold text-sm sm:text-base shadow-xl shadow-teal-500/25 hover:shadow-teal-500/40 hover:-translate-y-0.5 transition-all group">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Ketahui kemampuan bahasa Inggris kamu melalui level test &rarr;</span>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong! Saya ingin konsultasi program belajar.') }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-4 rounded-2xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-sm sm:text-base border-2 border-slate-200 hover:border-et-pink shadow-md hover:shadow-lg transition-all">
                        <svg class="w-5 h-5 text-emerald-500 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Konsultasi WhatsApp</span>
                    </a>
                </div>

                <!-- Trust Points Grid (PDF Page 1) -->
                <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-4 border-t border-slate-200/80">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-pink-100 text-et-pink flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-xl font-black text-slate-900 leading-tight">1,500+</p>
                            <p class="text-xs font-semibold text-slate-500">Siswa Aktif & Lulus</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-xl font-black text-slate-900 leading-tight">98%</p>
                            <p class="text-xs font-semibold text-slate-500">Tingkat Kepuasan Orang Tua</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-pink-100 text-et-pink flex items-center justify-center shrink-0">
                            <span class="font-black text-sm">10</span>
                        </div>
                        <div class="text-left">
                            <p class="text-xl font-black text-slate-900 leading-tight">10</p>
                            <p class="text-xs font-semibold text-slate-500">Siswa per Kelas (Small Class)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/></svg>
                        </div>
                        <div class="text-left">
                            <p class="text-xs font-black text-slate-900 leading-tight">Program Terstruktur</p>
                            <p class="text-[11px] font-semibold text-slate-500">Kurikulum Berstandar GSE & CEFR</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Hero Card / Visual Card -->
            <div class="lg:col-span-5 relative reveal-child reveal-delay-2">
                
                <!-- Decorative Glow Blur -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-et-cyan/30 via-pink-400/20 to-purple-400/20 rounded-3xl blur-2xl -z-10"></div>

                <!-- Main Featured Interactive Mockup -->
                <div class="relative bg-white rounded-3xl border-2 border-slate-100 shadow-2xl p-6 sm:p-8 space-y-6">
                    
                    <!-- Card Top Header -->
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo English Trick" class="w-12 h-12 rounded-xl object-contain shadow-sm border border-slate-100 p-1">
                            <div>
                                <h3 class="font-extrabold text-slate-900 text-sm">English Trick Assessment</h3>
                                <p class="text-xs text-slate-500">Placement Test Demo</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded-full text-xs font-black bg-emerald-100 text-emerald-700">
                            Live Result
                        </span>
                    </div>

                    <!-- Level Badge Display -->
                    <div class="bg-gradient-to-br from-cyan-50 to-pink-50 p-5 rounded-2xl border border-cyan-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Hasil Level Penempatan</span>
                            <span class="text-xs font-black px-2 py-0.5 rounded-md bg-et-pink text-white">Score: 92%</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-et-cyan to-teal-500 text-white flex items-center justify-center font-black text-2xl shadow-md">
                                A2+
                            </div>
                            <div>
                                <p class="font-black text-lg text-slate-900">Confident Speaker</p>
                                <p class="text-xs text-slate-600">Siap melompat ke level B1 dengan metode "No Trick No Speak".</p>
                            </div>
                        </div>

                        <!-- Progress Bars -->
                        <div class="mt-4 space-y-2.5">
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Speaking Readiness</span>
                                    <span class="text-et-pink">95%</span>
                                </div>
                                <div class="w-full h-2 bg-white rounded-full overflow-hidden border border-slate-200">
                                    <div class="h-full bg-et-pink rounded-full w-[95%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                    <span>Vocabulary & Expression</span>
                                    <span class="text-et-cyan">90%</span>
                                </div>
                                <div class="w-full h-2 bg-white rounded-full overflow-hidden border border-slate-200">
                                    <div class="h-full bg-et-cyan rounded-full w-[90%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Feature Card -->
                    <div class="p-4 rounded-2xl bg-slate-900 text-white flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">🎧</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400">Audio Speech Feature</p>
                                <p class="text-sm font-extrabold text-white">Audio Native Accent di Setiap Soal!</p>
                            </div>
                        </div>
                        <a href="{{ route('quiz.index') }}" class="px-3.5 py-1.5 rounded-xl bg-et-pink text-white text-xs font-extrabold hover:bg-et-pink-hover whitespace-nowrap">
                            Coba Quiz &rarr;
                        </a>
                    </div>

                    <!-- Branch Quick Note -->
                    <div class="flex items-center gap-3 text-xs text-slate-500 pt-1">
                        <svg class="w-4 h-4 text-et-cyan shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Cabang Resmi: <strong>Damarsi, Karangbong & Taman Pondok Jati</strong>. Kelas Offline & Online.</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


            </div>

        </div>
    </div>
</section>


<!-- 2. SECTION PROFIL & FILOSOFI "NO TRICK, NO SPEAK" -->
<section id="tentang-kami" class="reveal-section py-20 bg-slate-50/70 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Part A: COMPANY PROFILE & VISI MISI (PDF Page 2) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: Company Profile Text -->
            <div class="lg:col-span-4 space-y-4 text-left reveal-child reveal-delay-1">
                <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Company Profile</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Tentang <span class="text-et-cyan">English Trick</span>
                </h2>
                <div class="space-y-3 text-sm text-slate-600 leading-relaxed font-normal">
                    <p>
                        English Trick adalah lembaga kursus bahasa Inggris yang berdiri sejak 2019 di Sidoarjo, Jawa Timur. Kami menyelenggarakan program pembelajaran terstruktur yang menitikberatkan pada keberanian dan kemampuan berbicara siswa, didukung sistem akademik yang terstandar, pengembangan guru yang berkelanjutan, serta tata kelola yang profesional.
                    </p>
                    <p>
                        Seluruh cabang menjalankan standar operasional yang sama, sehingga mutu pembelajaran terjaga di mana pun siswa belajar, pada biaya yang tetap terjangkau bagi keluarga Indonesia.
                    </p>
                </div>
            </div>

            <!-- Center: Visual Student Showcase Card -->
            <div class="lg:col-span-4 reveal-child reveal-delay-2 flex justify-center">
                <div class="relative w-full max-w-sm bg-gradient-to-br from-cyan-100 via-white to-pink-100 rounded-3xl p-6 border-2 border-white shadow-xl text-center overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-et-cyan/20 rounded-full blur-2xl"></div>
                    <div class="relative space-y-4">
                        <img src="{{ asset('images/logo.png') }}" alt="English Trick" class="w-20 h-20 mx-auto rounded-2xl bg-white p-2 shadow-md">
                        <div class="space-y-1">
                            <span class="inline-block px-3 py-1 rounded-full bg-et-cyan text-white text-xs font-extrabold uppercase tracking-wider">
                                Speak Confidently, Grow Brighter
                            </span>
                            <h4 class="text-lg font-black text-slate-900">English Trick Sidoarjo</h4>
                            <p class="text-xs text-slate-600">English for a Brighter Tomorrow</p>
                        </div>
                        <div class="pt-2 flex justify-center gap-2">
                            <span class="px-3 py-1 rounded-lg bg-white/80 border border-slate-200 text-[11px] font-bold text-slate-700 shadow-2xs">Berdiri 2019</span>
                            <span class="px-3 py-1 rounded-lg bg-pink-500 text-white text-[11px] font-bold shadow-2xs">3 Cabang Sidoarjo</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Visi & Misi Card -->
            <div class="lg:col-span-4 space-y-6 text-left reveal-child reveal-delay-3">
                <!-- Visi -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-sm space-y-2 relative overflow-hidden">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-pink-100 text-et-pink flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <h3 class="text-lg font-black text-slate-900">Visi</h3>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                        Menjadi lembaga kursus bahasa Inggris dengan reputasi terbaik di Sidoarjo dan Jawa Timur, dengan mutu yang setara di seluruh cabang.
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-sm space-y-3">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-cyan-100 text-et-cyan flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <h3 class="text-lg font-black text-slate-900">Misi</h3>
                    </div>
                    <ol class="space-y-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        <li class="flex items-start gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">1</span>
                            <span>Membangun sistem akademik yang terstruktur dan berstandar internasional.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">2</span>
                            <span>Mengembangkan guru dan staf sebagai aset utama lembaga.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">3</span>
                            <span>Menjalankan tata kelola profesional berbasis data dan SOP yang seragam di seluruh cabang.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">4</span>
                            <span>Melayani siswa dan orang tua melampaui harapan mereka.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">5</span>
                            <span>Memperluas akses pendidikan bahasa Inggris bermutu di Jawa Timur.</span>
                        </li>
                    </ol>
                </div>
            </div>

        </div>

        <!-- Part B: FILOSOFI "NO TRICK, NO SPEAK" (PDF Page 2) -->
        <div>
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Filosofi Belajar Kami</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Kenapa Slogannya <span class="text-transparent bg-clip-text bg-gradient-to-r from-et-cyan to-et-pink">"No Trick, No Speak"</span>?
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Pernahkah kamu atau anakmu belajar bahasa Inggris bertahun-tahun di sekolah tapi tetap kaku saat diajak ngobrol? Ini penyebabnya:
                </p>
            </div>

            <!-- Comparison Cards: Cara Lama vs Cara English Trick -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                
                <!-- Cara Lama -->
                <div class="bg-white rounded-3xl p-8 border border-red-100 shadow-sm relative overflow-hidden reveal-child reveal-delay-1">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-red-100/40 rounded-bl-full -z-0"></div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-10 rounded-xl bg-red-100 text-red-600 flex items-center justify-center font-black text-lg">✕</span>
                        <div>
                            <h3 class="font-extrabold text-slate-900 text-lg">Metode Lama / Konvensional</h3>
                            <p class="text-xs text-red-500 font-bold">Bikin jenuh dan takut salah</p>
                        </div>
                    </div>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">✕</span>
                            <span>Fokus menghafal rumus 16 tenses yang abstrak dan kaku.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">✕</span>
                            <span>Siswa sering dikoreksi saat baru berucap, membuat mental down dan minder.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">✕</span>
                            <span>Kelas terlalu ramai (20–30 siswa), giliran bicara hanya 1–2 menit.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">✕</span>
                            <span>Menterjemahkan kata perkata di kepala sebelum berani berbicara.</span>
                        </li>
                    </ul>
                </div>

                <!-- Cara English Trick -->
                <div class="bg-gradient-to-br from-white via-cyan-50/30 to-pink-50/40 rounded-3xl p-8 border-2 border-et-cyan shadow-xl relative overflow-hidden reveal-child reveal-delay-2">
                    <div class="absolute top-0 right-0 bg-gradient-to-l from-et-pink to-et-cyan text-white text-[11px] font-black uppercase tracking-wider py-1 px-4 rounded-bl-xl shadow-sm">
                        Metode English Trick
                    </div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-10 rounded-xl bg-gradient-to-tr from-et-cyan to-teal-500 text-white flex items-center justify-center font-black text-lg">✓</span>
                        <div>
                            <h3 class="font-extrabold text-slate-900 text-lg">Metode "No Trick, No Speak"</h3>
                            <p class="text-xs text-et-cyan font-bold">Praktis, Seru, Langsung Praktek</p>
                        </div>
                    </div>
                    <ul class="space-y-4 text-sm text-slate-700 font-medium">
                        <li class="flex items-start gap-3">
                            <span class="text-emerald-500 font-black text-base">✓</span>
                            <span><strong>Formula Kalimat Instan:</strong> Trik merangkai kalimat tanpa mikir tenses berbelit.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-emerald-500 font-black text-base">✓</span>
                            <span><strong>Non-Judgmental Zone:</strong> Lingkungan aman & fun, siswa bebas berekspresi tanpa takut salah.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-emerald-500 font-black text-base">✓</span>
                            <span><strong>Small Class 1 : 6:</strong> Porsi speaking setiap siswa minimal 60% waktu kelas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-emerald-500 font-black text-base">✓</span>
                            <span><strong>Habit & Immersion:</strong> Melatih otak berpikir langsung dalam bahasa Inggris!</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- 3. SECTION PROGRAM KURSUS LENGKAP -->
<section id="program" class="reveal-section py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-cyan bg-cyan-100 px-3 py-1 rounded-full">Program Pilihan</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Program Lengkap
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Dimulai dari anak usia 3 tahun - 18 tahun, remaja, mahasiswa hingga dewasa
            </p>
        </div>

        <!-- Program Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($programs as $index => $prog)
            <div class="bg-white rounded-3xl border border-slate-200 hover:border-et-cyan card-hover p-7 flex flex-col justify-between relative shadow-sm hover:shadow-xl reveal-child reveal-delay-{{ min(($index % 3) + 1, 6) }}">
                
                <!-- Badge if popular -->
                @if($prog->badge)
                <div class="absolute -top-3.5 right-6 px-3.5 py-1 rounded-full text-[11px] font-black uppercase tracking-wider text-white shadow-md {{ $prog->is_popular ? 'bg-et-pink' : 'bg-slate-800' }}">
                    {{ $prog->badge }}
                </div>
                @endif

                <div>
                    <!-- Age Group & Category -->
                    <div class="inline-block px-3 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-extrabold mb-3">
                        {{ $prog->age_group }}
                    </div>

                    <h3 class="text-xl font-black text-slate-900 mb-2 hover:text-et-cyan transition-colors">
                        {{ $prog->name }}
                    </h3>

                    <p class="text-xs font-semibold text-et-cyan mb-4">
                        "{{ $prog->tagline }}"
                    </p>

                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        {{ $prog->description }}
                    </p>

                    <!-- Features List -->
                    <div class="border-t border-slate-100 pt-4 mb-6 space-y-2.5">
                        <p class="text-xs font-black uppercase text-slate-400 tracking-wider">Fasilitas Unggulan:</p>
                        @foreach($prog->features as $feat)
                        <div class="flex items-center gap-2.5 text-xs text-slate-700">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ $feat }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3">
                    <div>
                        @if($prog->price_starting === 'On Going')
                        <span class="text-lg font-black text-et-pink">On Going</span>
                        <span class="text-[11px] text-slate-500 block font-semibold">Akan Segera Dibuka</span>
                        @else
                        <span class="text-[11px] text-slate-400 block font-semibold">Mulai Dari</span>
                        <span class="text-lg font-black text-slate-900">{{ $prog->price_starting }} <span class="text-xs font-semibold text-slate-500">/ bulan</span></span>
                        @endif
                    </div>
                    
                    <a href="{{ route('program.detail', $prog->slug) }}" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-et-cyan hover:text-white text-slate-800 font-extrabold text-xs transition-colors">
                        Lihat Detail &rarr;
                    </a>
                </div>

            </div>
            @endforeach
        </div>

        <!-- Banner Placement Test Callout -->
        <div class="mt-16 rounded-3xl bg-gradient-to-r from-et-cyan via-cyan-600 to-et-pink p-8 sm:p-12 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-8 reveal-child">
            <div class="space-y-2 text-center md:text-left">
                <span class="px-3 py-1 rounded-full bg-white/20 text-xs font-black uppercase tracking-wider">Belum Yakin Pilih Kelas Mana?</span>
                <h3 class="text-2xl sm:text-3xl font-black">Ikuti Placement Test Interaktif Kami Sekarang!</h3>
                <p class="text-sm sm:text-base text-cyan-100 max-w-xl">Hanya butuh waktu 3-5 menit untuk mengetahui estimasi level CEFR dan program yang paling cocok untuk kamu atau anak tercinta.</p>
            </div>
            <a href="{{ route('quiz.index') }}" class="px-8 py-4 rounded-2xl bg-white text-slate-900 font-black text-base hover:bg-yellow-300 shadow-lg hover:scale-105 transition-all whitespace-nowrap">
                Mulai Quiz Gratis &rarr;
            </a>
        </div>

    </div>
</section>


<!-- 4. SECTION KEUNGGULAN (PDF Page 4) -->
<section id="keunggulan" class="reveal-section py-20 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Keunggulan</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Kurikulum Internasional Pearson
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Standar penilaian GSE & CEFR
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-1">
                <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-et-cyan flex items-center justify-center text-2xl font-black">
                    📚
                </div>
                <h3 class="text-lg font-black text-slate-900">Kurikulum Internasional Pearson</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Standar GSE internasional.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-2">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl font-black">
                    📊
                </div>
                <h3 class="text-lg font-black text-slate-900">Tes Kenaikan Level</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Evaluasi level belajar secara terstruktur.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-3">
                <div class="w-12 h-12 rounded-2xl bg-pink-100 text-et-pink flex items-center justify-center text-2xl font-black">
                    🏅
                </div>
                <h3 class="text-lg font-black text-slate-900">Achievement Certificate</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Sertifikat resmi sebagai apresiasi pencapaian siswa.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl font-black">
                    📱
                </div>
                <h3 class="text-lg font-black text-slate-900">Laporan Progress Belajar</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Orang tua mendapatkan informasi perkembangan belajar siswa.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-5">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl font-black">
                    🏆
                </div>
                <h3 class="text-lg font-black text-slate-900">Coaching Clinic</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Pendampingan Lomba dan Olimpiade
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 reveal-child reveal-delay-6">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl font-black">
                    💻
                </div>
                <h3 class="text-lg font-black text-slate-900">Fun Learning & E-Learning</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Belajar menyenangkan didukung aktivitas dan pembelajaran digital.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- 6. SECTION TUTOR & COACH PRESTATIF -->
<section id="tutor" class="reveal-section py-20 bg-slate-50/80 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Tim Pengajar</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Tutor Prestatif, Ramah & Komunikatif
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Dibimbing langsung oleh para pakar bahasa Inggris berpengalaman yang siap membuat setiap sesi belajar jadi menyenangkan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            @foreach($tutors as $index => $tutor)
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm card-hover flex flex-col justify-between reveal-child reveal-delay-{{ min(($index % 5) + 1, 6) }}">
                <div class="p-5 text-center space-y-4">
                    <img src="{{ $tutor['avatar'] }}" alt="{{ $tutor['name'] }}" class="w-36 h-36 sm:w-40 sm:h-40 mx-auto rounded-full object-cover object-top border-4 border-cyan-100 shadow-md transition-transform duration-300 hover:scale-105">
                    <div>
                        <h3 class="font-black text-slate-900 text-base sm:text-lg">{{ $tutor['name'] }}</h3>
                        <p class="text-xs font-bold text-et-cyan mt-0.5">{{ $tutor['role'] }}</p>
                    </div>
                    <span class="inline-block px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-[11px] font-semibold">
                        {{ $tutor['certification'] }}
                    </span>
                    <p class="text-xs text-slate-500 italic bg-slate-50 p-3 rounded-xl border border-slate-100">
                        "{{ $tutor['quote'] }}"
                    </p>
                </div>
                <div class="px-5 sm:px-6 py-3 bg-cyan-50/50 border-t border-slate-100 text-center">
                    <span class="text-[11px] font-black text-cyan-800 uppercase tracking-wider">Spesialisasi:</span>
                    <p class="text-xs font-bold text-slate-700">{{ $tutor['specialty'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<!-- 7. SECTION TESTIMONI & CERITA SUKSES -->
<section id="testimoni" class="reveal-section py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Cerita Sukses</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Apa Kata Mereka Tentang English Trick?
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Kisah nyata dari orang tua dan siswa yang telah membuktikan metode "No Trick, No Speak".
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($testimonials as $index => $testi)
            <div class="bg-white rounded-3xl border-2 border-pink-300 hover:border-pink-500 p-6 flex flex-col justify-between text-center shadow-sm hover:shadow-xl transition-all duration-300 card-hover reveal-child reveal-delay-{{ min(($index % 4) + 1, 6) }}">
                <div class="space-y-4">
                    <!-- Photo -->
                    <div class="relative inline-block mx-auto">
                        <img src="{{ $testi['avatar'] }}" alt="{{ $testi['name'] }}" class="w-20 h-20 sm:w-24 sm:h-24 mx-auto rounded-full object-cover border-4 border-pink-100 shadow-md">
                    </div>
                    
                    <!-- Pink Name Pill Badge -->
                    <div>
                        <span class="inline-block bg-gradient-to-r from-pink-500 to-rose-500 text-white font-black text-xs sm:text-sm px-4 py-1.5 rounded-full shadow-sm leading-tight">
                            {{ $testi['name'] }}
                        </span>
                    </div>

                    <!-- Star Rating -->
                    <div class="flex items-center justify-center gap-1 text-amber-400">
                        @for($i = 0; $i < $testi['rating']; $i++)
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>

                    <p class="text-xs sm:text-[13px] text-slate-700 leading-relaxed font-medium">
                        "{{ $testi['text'] }}"
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-slate-100">
                    <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                        {{ $testi['category'] }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Bottom Banner: Ace the Test, Elevate Your English with Smart Tricks! -->
        <div class="mt-14 bg-gradient-to-r from-cyan-600 via-et-cyan to-pink-500 rounded-3xl p-6 sm:p-8 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
            <div class="space-y-1">
                <span class="text-xs font-black uppercase tracking-wider bg-white/20 px-3 py-1 rounded-full inline-block">English Trick Sidoarjo</span>
                <h3 class="text-2xl sm:text-3xl font-black tracking-tight text-white">
                    Ace the Test, Elevate Your English with Smart Tricks!
                </h3>
                <p class="text-white/90 text-sm sm:text-base">
                    Gabung bersama ratusan siswa berprestasi lainnya di Damarsi Sidoarjo. Dapatkan Free Trial Class sekarang!
                </p>
            </div>
            <div class="flex items-center gap-3 shrink-0 flex-wrap justify-center">
                <a href="#daftar" class="px-6 py-3 rounded-2xl bg-white text-slate-900 font-extrabold text-sm hover:bg-slate-100 shadow-md transition-all">
                    Daftar Kelas Trial
                </a>
                <a href="https://wa.me/{{ $location['whatsapp'] }}?text={{ urlencode('Halo English Trick, saya ingin konsultasi dan daftar sesi trial gratis!') }}" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-sm shadow-md transition-all flex items-center gap-2">
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>

    </div>
</section>


<!-- 8. SECTION FORM PENDAFTARAN & KONSULTASI ONLINE -->
<section id="daftar" class="reveal-section py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6 reveal-child reveal-delay-1">
                <span class="px-3 py-1 rounded-full bg-et-pink/20 text-pink-300 text-xs font-black uppercase tracking-wider">Pendaftaran Cepat</span>
                <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight leading-snug">
                    Mulai Belajar Hari Ini, Dapatkan <span class="text-et-cyan">Free Trial Sesi</span>!
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Isi formulir singkat di samping atau hubungi admin kami via WhatsApp. Kami akan segera menghubungi kamu untuk menjadwalkan tes penempatan level dan sesi konsultasi program tanpa biaya.
                </p>

                <div class="space-y-3 pt-2">
                    <div class="flex items-center gap-3 text-sm text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span>Free Placement Test Online / Offline</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span>Diskon Khusus Pendaftaran Gelombang Bulan Ini</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center text-xs font-bold">✓</span>
                        <span>Garansi Lancar Bicara & Bimbingan Ulang Gratis</span>
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-4">
                    <img src="{{ asset('images/logo.png') }}" alt="English Trick" class="w-16 h-16 rounded-2xl bg-white p-1 shadow-md">
                    <div>
                        <p class="text-sm font-extrabold text-white">English Trick Damarsi</p>
                        <p class="text-xs text-slate-400">Pusat Belajar Bahasa Inggris Terpercaya</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 reveal-child reveal-delay-2">
                <div class="bg-white text-slate-800 rounded-3xl p-8 sm:p-10 shadow-2xl border border-slate-100">
                    <h3 class="text-2xl font-black text-slate-900 mb-1">Formulir Konsultasi & Pendaftaran</h3>
                    <p class="text-xs text-slate-500 mb-6">Data Anda aman dan langsung terhubung dengan admin resmi kami.</p>

                    <form action="{{ route('register.store') }}" method="POST" id="registrationForm" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="reg_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Lengkap *</label>
                                <input type="text" name="name" id="reg_name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm">
                            </div>
                            <div>
                                <label for="reg_whatsapp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">No. WhatsApp *</label>
                                <input type="text" name="whatsapp" id="reg_whatsapp" required placeholder="Contoh: 081234567890" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="reg_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email (Opsional)</label>
                                <input type="email" name="email" id="reg_email" placeholder="nama@email.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm">
                            </div>
                            <div>
                                <label for="reg_program" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pilihan Program Kursus *</label>
                                <select name="program_id" id="reg_program" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm bg-white">
                                    <option value="">-- Pilih Program --</option>
                                    @foreach($programs as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }} ({{ $p->age_group }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="reg_mode" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Metode Belajar *</label>
                                <select name="learning_mode" id="reg_mode" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm bg-white">
                                    <option value="offline">Tatap Muka di Damarsi Sidoarjo</option>
                                    <option value="online">Kelas Online Interaktif</option>
                                    <option value="privat">Privat 1-on-1 (Guru ke Rumah / Online)</option>
                                </select>
                            </div>
                            <div>
                                <label for="reg_schedule" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pilihan Waktu Belajar</label>
                                <input type="text" name="preferred_schedule" id="reg_schedule" placeholder="Misal: Sore hari / Akhir pekan" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="reg_message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pertanyaan atau Catatan Khusus</label>
                            <textarea name="message" id="reg_message" rows="3" placeholder="Tuliskan jika ada kebutuhan khusus atau target belajar kamu..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-et-cyan to-et-pink hover:opacity-95 text-white font-extrabold text-base shadow-xl shadow-cyan-500/20 active:scale-95 transition-all">
                            Kirim & Hubungkan ke WhatsApp Admin &rarr;
                        </button>

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- 9. SECTION LOKASI CABANG ENGLISH TRICK & GOOGLE MAPS (PDF Page 7) -->
<section id="lokasi" class="reveal-section py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-cyan bg-cyan-100 px-3 py-1 rounded-full">Kunjungi Learning Center Kami</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Alamat English Trick
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Kunjungi cabang English Trick terdekat dan rasakan sendiri suasana belajar yang nyaman, menyenangkan, dan penuh semangat.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left: 3 Branch Cards (PDF Page 7) -->
            <div class="lg:col-span-7 space-y-5 reveal-child reveal-delay-1">
                @foreach($branches as $branch)
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">
                    
                    <div class="flex items-start gap-4">
                        <!-- Number Badge -->
                        <div class="w-12 h-12 rounded-2xl bg-cyan-50 border border-cyan-200 text-et-cyan flex items-center justify-center font-black text-lg shrink-0">
                            {{ $branch['number'] }}
                        </div>

                        <!-- Details -->
                        <div class="space-y-1.5">
                            <h3 class="font-black text-xl text-slate-900 leading-tight">
                                {{ $branch['name'] }}
                            </h3>
                            <div class="flex items-start gap-2 text-xs sm:text-sm text-slate-600 leading-relaxed max-w-md">
                                <svg class="w-4 h-4 text-slate-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span>{{ $branch['address'] }}</span>
                            </div>
                            <div class="pt-1">
                                <a href="{{ $branch['maps_url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-et-cyan hover:underline">
                                    <span>Lihat Lokasi di Google Maps</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Button Pill -->
                    <div class="shrink-0 w-full sm:w-auto">
                        <a href="https://wa.me/{{ $branch['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full {{ $branch['bg_pill'] }} font-extrabold text-xs sm:text-sm shadow-sm hover:shadow transition-all w-full sm:w-auto">
                            <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span class="whitespace-nowrap">No. WhatsApp {{ $branch['phone'] }}</span>
                        </a>
                    </div>

                </div>
                @endforeach
            </div>

            <!-- Right Interactive Map Embed -->
            <div class="lg:col-span-5 bg-white rounded-3xl p-3 border border-slate-200 shadow-xl overflow-hidden reveal-child reveal-delay-2">
                <div class="relative w-full h-[460px] rounded-2xl overflow-hidden bg-slate-100">
                    <iframe 
                        src="{{ $location['maps_embed_url'] }}" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Peta Lokasi Cabang English Trick Sidoarjo">
                    </iframe>
                </div>
            </div>

        </div>

        <!-- Bottom Banner: Ada Pertanyaan Tentang Lokasi? (PDF Page 7) -->
        <div class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-lg flex flex-col md:flex-row items-center justify-between gap-6 border-l-4 border-et-pink">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-white/10 text-pink-400 flex items-center justify-center text-3xl shrink-0">
                    📍
                </div>
                <div>
                    <h4 class="text-xl font-black text-white">Ada Pertanyaan Tentang Lokasi?</h4>
                    <p class="text-slate-300 text-xs sm:text-sm mt-0.5">
                        Kamu bisa hubungi cabang terdekat kami melalui WhatsApp atau klik tombol "Lihat Lokasi" untuk petunjuk arah di Google Maps.
                    </p>
                </div>
            </div>
            <a href="https://wa.me/6285385120633" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-2xl bg-gradient-to-r from-et-cyan to-teal-500 hover:from-cyan-600 hover:to-teal-600 text-white font-extrabold text-sm shadow-md transition-all whitespace-nowrap shrink-0">
                Hubungi Kami via WhatsApp &rarr;
            </a>
        </div>

    </div>
</section>

<!-- 9B. SECTION CAREER CENTER -->
<section id="career-center" class="reveal-section py-20 bg-gradient-to-b from-white via-cyan-50/30 to-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-cyan bg-cyan-100 px-3 py-1 rounded-full">Peluang Karir</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Career Center English Trick
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Mari bergabung menjadi bagian dari revolusi belajar bahasa Inggris yang asyik, aplikatif, dan berdampak di Sidoarjo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Position 1 -->
            <div class="bg-white p-7 rounded-3xl border-2 border-slate-100 shadow-md hover:shadow-xl hover:border-et-cyan transition-all space-y-4 flex flex-col justify-between reveal-child">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-et-cyan flex items-center justify-center text-2xl">
                        👶
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-et-pink bg-pink-50 px-2.5 py-0.5 rounded-full">Full-Time / Part-Time</span>
                        <h3 class="text-xl font-black text-slate-900 mt-2">English Tutor (Kids & Junior)</h3>
                        <p class="text-xs text-slate-500 font-semibold mt-0.5">Penempatan: Karangbong, Damarsi, atau Taman Pondok Jati</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2">✓ Menguasai Phonics & Fun Speaking games</li>
                        <li class="flex items-center gap-2">✓ Ramah, sabar, dan menyukai dunia anak</li>
                        <li class="flex items-center gap-2">✓ Terbuka untuk Fresh Graduate / Mahasiswa Akhir</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong! Saya tertarik melamar posisi: English Tutor (Kids & Junior). Mohon info prosedur seleksi dan pengiriman CV.') }}" target="_blank" rel="noopener noreferrer" class="w-full py-3 rounded-xl bg-et-cyan hover:bg-et-cyan-dark text-white font-black text-xs text-center flex items-center justify-center gap-1.5 transition-all shadow-md">
                        <span>Lamar Posisi Ini &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Position 2 -->
            <div class="bg-white p-7 rounded-3xl border-2 border-slate-100 shadow-md hover:shadow-xl hover:border-et-pink transition-all space-y-4 flex flex-col justify-between reveal-child reveal-delay-1">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-pink-100 text-et-pink flex items-center justify-center text-2xl">
                        🗣️
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-cyan-700 bg-cyan-50 px-2.5 py-0.5 rounded-full">Full-Time / Part-Time</span>
                        <h3 class="text-xl font-black text-slate-900 mt-2">Speaking Coach & Exam Tutor</h3>
                        <p class="text-xs text-slate-500 font-semibold mt-0.5">Penempatan: Offline Sidoarjo & Online Class</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2">✓ Fasih Speaking & penguasaan trik grammar</li>
                        <li class="flex items-center gap-2">✓ Pengalaman TOEFL / IELTS / Business English nilai plus</li>
                        <li class="flex items-center gap-2">✓ Berjiwa komunikatif & energik</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong! Saya tertarik melamar posisi: Speaking Coach & Exam Tutor. Mohon info prosedur seleksi dan pengiriman CV.') }}" target="_blank" rel="noopener noreferrer" class="w-full py-3 rounded-xl bg-et-pink hover:bg-et-pink-hover text-white font-black text-xs text-center flex items-center justify-center gap-1.5 transition-all shadow-md">
                        <span>Lamar Posisi Ini &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Position 3 -->
            <div class="bg-white p-7 rounded-3xl border-2 border-slate-100 shadow-md hover:shadow-xl hover:border-emerald-500 transition-all space-y-4 flex flex-col justify-between reveal-child reveal-delay-2">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl">
                        📋
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full">Full-Time</span>
                        <h3 class="text-xl font-black text-slate-900 mt-2">Admin & Academic Coordinator</h3>
                        <p class="text-xs text-slate-500 font-semibold mt-0.5">Penempatan: Kantor Cabang Sidoarjo</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2">✓ Mengelola jadwal kelas & administrasi siswa</li>
                        <li class="flex items-center gap-2">✓ Komunikasi prima & ramah via WhatsApp</li>
                        <li class="flex items-center gap-2">✓ Terbiasa mengoperasikan komputer & spreadsheet</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong! Saya tertarik melamar posisi: Admin & Academic Coordinator. Mohon info prosedur seleksi dan pengiriman CV.') }}" target="_blank" rel="noopener noreferrer" class="w-full py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-black text-xs text-center flex items-center justify-center gap-1.5 transition-all shadow-md">
                        <span>Lamar Posisi Ini &rarr;</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Banner Kirim CV Terbuka -->
        <div class="rounded-3xl bg-slate-900 text-white p-8 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl reveal-child">
            <div class="space-y-2 text-center md:text-left">
                <span class="text-xs font-black uppercase tracking-wider text-cyan-400 bg-cyan-950/80 px-3 py-1 rounded-full border border-cyan-800">Open Talent Pool</span>
                <h3 class="text-2xl font-black">Tidak Menemukan Posisi yang Cocok?</h3>
                <p class="text-sm text-slate-400 max-w-xl">Kirimkan portofolio atau CV terbuka kamu langsung ke Tim HRD & Admin English Trick. Kami akan menghubungi saat ada lowongan yang sesuai dengan keahlianmu.</p>
            </div>
            <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo HRD & Admin English Trick Karangbong! Saya ingin mengirimkan CV terbuka (Open Application) untuk bergabung di English Trick. Mohon info alamat email atau kontak pengiriman berkas.') }}" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-2xl bg-white text-slate-900 hover:bg-yellow-300 font-black text-sm shadow-lg hover:scale-105 transition-all whitespace-nowrap">
                Kirim CV Terbuka via WhatsApp &rarr;
            </a>
        </div>

    </div>
</section>

<!-- 10. SECTION FAQ (TANYA JAWAB) -->
<section id="faq" class="reveal-section py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-3">
            <span class="text-xs font-black uppercase tracking-widest text-et-pink bg-pink-100 px-3 py-1 rounded-full">Tanya Jawab</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-slate-600 text-base">Informasi seputar pendaftaran, metode, dan sistem belajar di English Trick.</p>
        </div>

        <div class="space-y-4" id="faqAccordion">
            @foreach($faqs as $index => $faq)
            <div class="border border-slate-200 rounded-2xl overflow-hidden transition-colors duration-200">
                <button type="button" class="faq-toggle w-full text-left px-6 py-4.5 bg-slate-50/70 hover:bg-slate-100 flex items-center justify-between gap-4 font-extrabold text-slate-900 text-base" data-index="{{ $index }}">
                    <span>{{ $faq['question'] }}</span>
                    <span class="faq-icon text-xl text-et-cyan font-bold transition-transform duration-200">+</span>
                </button>
                <div class="faq-content hidden px-6 py-4 bg-white text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


@endsection

@push('scripts')
<script>
    // FAQ Accordion interaction
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('.faq-icon');
            const isClosed = content.classList.contains('hidden');

            // Close all
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => {
                i.textContent = '+';
                i.classList.remove('rotate-45');
            });

            if (isClosed) {
                content.classList.remove('hidden');
                icon.textContent = '✕';
            }
        });
    });

    // Registration Form AJAX Submission
    const regForm = document.getElementById('registrationForm');
    if (regForm) {
        regForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = regForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = 'Memproses Pendaftaran...';
            submitBtn.disabled = true;

            const formData = new FormData(regForm);

            try {
                const res = await fetch("{{ route('register.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await res.json();
                if (data.status === 'success' && data.whatsapp_url) {
                    window.location.href = data.whatsapp_url;
                } else {
                    alert(data.message || 'Terjadi kesalahan, silakan coba lagi.');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            } catch (err) {
                // Fallback to normal form submission
                regForm.submit();
            }
        });
    }
</script>
@endpush
