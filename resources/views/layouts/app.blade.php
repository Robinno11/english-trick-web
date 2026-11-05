<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'English Trick | No Trick, No Speak - Kursus Bahasa Inggris Damarsi Sidoarjo')</title>
    <meta name="description" content="@yield('meta_description', 'Kursus bahasa Inggris asyik, cepat lancar, dan bergaransi di Damarsi Sidoarjo. Belajar speaking, kids, teens, TOEFL/IELTS dengan metode No Trick No Speak!')">
    <meta property="og:title" content="English Trick | No Trick, No Speak">
    <meta property="og:description" content="Kursus bahasa Inggris asyik & bergaransi di Damarsi Sidoarjo. Coba Tes Kemampuan Kamu Disini & Placement Test gratis!">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'et-cyan': '#00A3C4',
                        'et-cyan-dark': '#0087a3',
                        'et-cyan-light': '#E0F7FA',
                        'et-pink': '#FF007F',
                        'et-pink-hover': '#e00070',
                        'et-pink-light': '#FCE7F3',
                        'et-dark': '#0F172A',
                        'et-navy': '#1E293B',
                        'et-soft': '#F8FAFC',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['"Fredoka"', '"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body class="font-sans antialiased text-slate-800 bg-white selection:bg-pink-100 selection:text-pink-600">

    <!-- Top Notice Bar -->
    <div class="bg-gradient-to-r from-et-cyan via-cyan-600 to-et-pink text-white text-xs sm:text-sm font-semibold py-2 px-4 text-center tracking-wide">
        <div class="max-w-7xl mx-auto flex items-center justify-center gap-2 flex-wrap">
            <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-white/20 text-white text-[11px] font-bold uppercase tracking-wider">Promo 2026</span>
            <span>🎉 Pendaftaran Gelombang Baru Dibuka! <strong>Free Placement Test & Sesi Trial Class Gratis</strong> di Damarsi Sidoarjo!</span>
            <a href="{{ route('quiz.index') }}" class="underline hover:text-yellow-200 font-bold ml-1">Ikuti Quiz Sekarang &rarr;</a>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 glass-nav border-b border-slate-100 shadow-sm transition-all duration-200" id="mainHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo & Slogan -->
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3.5 group shrink-0 py-1">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo English Trick" class="h-14 w-14 sm:h-16 sm:w-16 object-contain rounded-2xl transition-transform group-hover:scale-105 shadow-sm shrink-0">
                    <div class="flex flex-col justify-center min-w-0">
                        <span class="font-black text-lg sm:text-xl md:text-2xl tracking-tight text-slate-900 leading-none group-hover:text-et-cyan transition-colors whitespace-nowrap">
                            ENGLISH <span class="text-et-pink">TRICK</span>
                        </span>
                        <div class="mt-1 flex items-center">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-pink-50 text-et-pink text-[9px] sm:text-[10px] md:text-[11px] font-black tracking-wider uppercase border border-pink-200/80 whitespace-nowrap shadow-xs">
                                NO TRICK, NO SPEAK
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Desktop Menu Navigation -->
                <nav class="hidden xl:flex items-center gap-0.5 2xl:gap-1.5 text-xs xl:text-[13px] 2xl:text-sm font-bold text-slate-700" id="desktopNav">
                    <a href="{{ route('home') }}#beranda" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="beranda">
                        <span>Beranda</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#tentang-kami" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="tentang-kami">
                        <span>Profil & Metode</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#program" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="program">
                        <span>Program Les</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('quiz.index') }}" class="nav-menu-link px-2.5 py-2 rounded-lg text-et-cyan hover:bg-cyan-50/50 transition-colors inline-flex items-center gap-1.5 font-extrabold whitespace-nowrap" data-nav="quiz">
                        <span>🎯 Tes Kemampuan Kamu Disini</span>
                        <span class="px-1.5 py-0.5 text-[10px] font-black uppercase tracking-wider bg-et-pink text-white rounded-full animate-pulse">Gratis</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#keunggulan" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="keunggulan">
                        <span>Keunggulan</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#tutor" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="tutor">
                        <span>Tutor Kami</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#testimoni" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="testimoni">
                        <span>Testimoni</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#lokasi" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="lokasi">
                        <span>Lokasi Cabang</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                    <a href="{{ route('home') }}#career-center" class="nav-menu-link px-2.5 py-2 rounded-lg hover:text-et-cyan transition-colors" data-nav="career-center">
                        <span>Career Center</span>
                        <span class="nav-indicator-line"></span>
                    </a>
                </nav>

                <!-- Action CTA Buttons -->
                <div class="hidden sm:flex items-center gap-3 shrink-0">
                    <a href="{{ route('quiz.index') }}" class="hidden 2xl:inline-flex items-center gap-2 px-4 py-2.5 rounded-full border-2 border-et-cyan text-et-cyan font-bold text-sm hover:bg-et-cyan hover:text-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        <span>Placement Test</span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong Sidoarjo! Saya ingin tanya jadwal kelas dan promo pendaftaran.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 rounded-full bg-et-pink hover:bg-et-pink-hover text-white font-extrabold text-sm transition-all shadow-md hover:shadow-lg shadow-pink-500/20 active:scale-95 whitespace-nowrap">
                        <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp Admin</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex xl:hidden items-center gap-2 shrink-0">
                    <a href="https://api.whatsapp.com/send?phone=6285385120633" target="_blank" class="p-2 rounded-lg bg-pink-50 text-et-pink">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                    <button id="mobileMenuBtn" type="button" class="p-2 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Buka Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div id="mobileMenu" class="hidden xl:hidden border-t border-slate-100 bg-white/95 backdrop-blur-md px-4 pt-3 pb-6 space-y-1.5 shadow-xl">
            <a href="{{ route('home') }}#beranda" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="beranda">Beranda</a>
            <a href="{{ route('home') }}#tentang-kami" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="tentang-kami">Profil & Metode "No Trick No Speak"</a>
            <a href="{{ route('home') }}#program" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="program">Program Kursus</a>
            <a href="{{ route('quiz.index') }}" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-extrabold text-et-cyan bg-cyan-50 flex items-center justify-between transition-all" data-nav="quiz">
                <span>🎯 Tes Kemampuan Kamu Disini</span>
                <span class="px-2 py-0.5 text-xs font-black uppercase bg-et-pink text-white rounded-full">Gratis</span>
            </a>
            <a href="{{ route('home') }}#keunggulan" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="keunggulan">Keunggulan Kami</a>
            <a href="{{ route('home') }}#tutor" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="tutor">Tutor & Coach</a>
            <a href="{{ route('home') }}#testimoni" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="testimoni">Testimoni Siswa</a>
            <a href="{{ route('home') }}#lokasi" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="lokasi">Lokasi Cabang</a>
            <a href="{{ route('home') }}#career-center" class="mobile-nav-link block px-3 py-2 rounded-lg text-base font-bold text-slate-800 hover:bg-slate-50 transition-all" data-nav="career-center">💼 Career Center</a>
            <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
                <a href="{{ route('quiz.index') }}" class="w-full py-3 text-center rounded-xl bg-et-cyan text-white font-bold text-sm shadow-md shadow-cyan-500/20">
                    Mulai Placement Test Gratis
                </a>
                <a href="https://api.whatsapp.com/send?phone=6285385120633" target="_blank" class="w-full py-3 text-center rounded-xl bg-et-pink text-white font-extrabold text-sm shadow-md shadow-pink-500/20">
                    Konsultasi via WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Main Body Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-16 pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 pb-12 border-b border-slate-800">
                
                <!-- Col 1: Brand & Slogan -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3 shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo English Trick" class="h-14 w-14 sm:h-16 sm:w-16 object-contain rounded-2xl bg-white p-1 shadow-md shrink-0">
                        <div class="flex flex-col justify-center min-w-0">
                            <span class="font-black text-2xl text-white tracking-tight leading-none whitespace-nowrap">ENGLISH <span class="text-et-pink">TRICK</span></span>
                            <div class="mt-1 flex items-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-cyan-950/80 text-cyan-400 text-[10px] font-black uppercase tracking-wider border border-cyan-800/80 w-fit whitespace-nowrap shadow-xs">
                                    NO TRICK, NO SPEAK
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-md">
                        Lembaga kursus dan bimbingan bahasa Inggris modern di Damarsi, Sidoarjo. Dengan metode khas <strong>"No Trick, No Speak"</strong>, kami membantu anak-anak, remaja, hingga dewasa lancar berbicara bahasa Inggris secara alami, percaya diri, dan bergaransi!
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="https://maps.app.goo.gl/gYsuyTMwArGPVSi36" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-400 hover:text-cyan-300 bg-cyan-950/60 border border-cyan-800/60 px-3 py-1.5 rounded-lg">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Damarsi, Buduran, Sidoarjo</span>
                        </a>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-pink-400 bg-pink-950/60 border border-pink-800/60 px-3 py-1.5 rounded-lg">
                            ⭐ Rating 4.9 / 5.0
                        </span>
                    </div>
                </div>

                <!-- Col 2: Program Kursus -->
                <div>
                    <h4 class="text-white font-extrabold text-sm uppercase tracking-wider mb-4">Program Belajar</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">English for Kids (4-8 thn)</a></li>
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">English for Teens (9-15 thn)</a></li>
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">Speaking Booster Dewasa</a></li>
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">TOEFL & IELTS Fast-Track</a></li>
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">VIP Private 1-on-1</a></li>
                        <li><a href="{{ route('home') }}#program" class="hover:text-cyan-400 transition-colors">Intensive Camp / Liburan</a></li>
                    </ul>
                </div>

                <!-- Col 3: Fitur & Fasilitas -->
                <div>
                    <h4 class="text-white font-extrabold text-sm uppercase tracking-wider mb-4">Fitur & Media</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('quiz.index') }}" class="text-pink-400 font-bold hover:text-pink-300 transition-colors">🎯 Tes Kemampuan Kamu Disini</a></li>
                        <li><a href="{{ route('home') }}#tentang-kami" class="hover:text-cyan-400 transition-colors">Metode No Trick No Speak</a></li>
                        <li><a href="{{ route('home') }}#tutor" class="hover:text-cyan-400 transition-colors">Profil Coach & Tutor</a></li>
                        <li><a href="{{ route('home') }}#career-center" class="hover:text-cyan-400 transition-colors">💼 Career Center</a></li>
                        <li><a href="{{ route('home') }}#testimoni" class="hover:text-cyan-400 transition-colors">Kisah Sukses Siswa</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-cyan-400 transition-colors">FAQ / Tanya Jawab</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kontak & Jam Buka -->
                <div>
                    <h4 class="text-white font-extrabold text-sm uppercase tracking-wider mb-4">Learning Center</h4>
                    <p class="text-xs text-slate-400 leading-relaxed mb-3">
                        <strong>English Trick Damarsi</strong><br>
                        Damarsi, Kec. Buduran, Kab. Sidoarjo, Jawa Timur 61252
                    </p>
                    <p class="text-xs text-slate-400 mb-2">
                        <strong>Jam Belajar:</strong><br>
                        Senin - Sabtu: 08.30 - 20.00 WIB
                    </p>
                    <p class="text-xs text-slate-400">
                        <strong>WhatsApp:</strong><br>
                        <a href="https://api.whatsapp.com/send?phone=6285385120633" target="_blank" class="text-cyan-400 hover:underline font-bold">+62 853-8512-0633</a>
                    </p>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} English Trick. All rights reserved. <em>English Trick: No Trick, No Speak</em>.</p>
                <div class="flex items-center gap-4">
                    <a href="https://maps.app.goo.gl/gYsuyTMwArGPVSi36" target="_blank" rel="noopener noreferrer" class="hover:text-slate-300">Peta Google Maps</a>
                    <span>•</span>
                    <a href="{{ route('quiz.index') }}" class="hover:text-slate-300">Online Quiz</a>
                    <span>•</span>
                    <a href="https://api.whatsapp.com/send?phone=6285385120633" target="_blank" class="hover:text-slate-300">WhatsApp Center</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Action Button -->
    <aside aria-label="WhatsApp floating button" class="fixed bottom-6 right-6 z-40">
        <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong Sidoarjo! Saya ingin konsultasi program kursus dan jadwal kelas.') }}" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="group flex items-center gap-3 bg-emerald-500 hover:bg-emerald-600 text-white p-3.5 sm:px-5 sm:py-3.5 rounded-full shadow-2xl hover:shadow-emerald-500/40 transition-all duration-300 hover:scale-105 active:scale-95 animate-pulse-subtle"
           aria-label="Konsultasi via WhatsApp">
            <svg class="w-6 h-6 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            <div class="hidden sm:block text-left">
                <p class="text-[10px] uppercase font-black tracking-wider text-emerald-100">Fast Response</p>
                <p class="text-xs font-bold leading-tight">Chat Admin Kami</p>
            </div>
        </a>
    </aside>

    <!-- Global Interactive Scripts (Smooth Scroll & Scroll Reveal Pop-Up) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Mobile Drawer Toggle
            const mobileBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // 2. Smooth Scroll for Navbar Menu Links with Offset
            const allNavHashLinks = document.querySelectorAll('a[href*="#"]');
            allNavHashLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    const hashIndex = href.indexOf('#');
                    if (hashIndex === -1) return;

                    const targetHash = href.substring(hashIndex);
                    if (targetHash === '#' || targetHash === '') return;

                    const urlWithoutHash = href.substring(0, hashIndex);
                    const currentPath = window.location.pathname;

                    // If link is on current page or root
                    const isSamePage = !urlWithoutHash || 
                                       urlWithoutHash === currentPath || 
                                       urlWithoutHash.endsWith(currentPath) || 
                                       (currentPath === '/' && (urlWithoutHash === '' || urlWithoutHash.endsWith('/')));

                    if (isSamePage) {
                        const targetElement = document.querySelector(targetHash);
                        if (targetElement) {
                            e.preventDefault();

                            // Close mobile drawer if opened
                            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');
                            }

                            // Calculate offset for sticky header
                            const header = document.getElementById('mainHeader');
                            const headerHeight = header ? header.offsetHeight : 80;
                            const elementTop = targetElement.getBoundingClientRect().top;
                            const targetPosition = elementTop + window.pageYOffset - headerHeight - 10;

                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });

                            history.pushState(null, null, targetHash);
                        }
                    }
                });
            });

            // Initial hash smooth scroll on page load if applicable
            if (window.location.hash) {
                setTimeout(() => {
                    const initialTarget = document.querySelector(window.location.hash);
                    if (initialTarget) {
                        const header = document.getElementById('mainHeader');
                        const headerHeight = header ? header.offsetHeight : 80;
                        const pos = initialTarget.getBoundingClientRect().top + window.pageYOffset - headerHeight - 10;
                        window.scrollTo({ top: pos, behavior: 'smooth' });
                    }
                }, 150);
            }

            // 3. Scroll Reveal Animation: Pop-up & Fade-in when entering viewport (continuous on every scroll)
            const revealSections = document.querySelectorAll('.reveal-section');
            if ('IntersectionObserver' in window && revealSections.length > 0) {
                const observerOptions = {
                    root: null,
                    rootMargin: '0px 0px -30px 0px',
                    threshold: 0.05
                };

                const revealObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-revealed');
                        } else {
                            entry.target.classList.remove('is-revealed');
                        }
                    });
                }, observerOptions);

                revealSections.forEach(section => {
                    revealObserver.observe(section);
                });
            } else {
                // Fallback: reveal all immediately
                revealSections.forEach(section => section.classList.add('is-revealed'));
            }

            // 4. Active Menu Line Indicator & ScrollSpy
            const desktopNavLinks = document.querySelectorAll('#desktopNav .nav-menu-link');
            const mobileNavLinks = document.querySelectorAll('#mobileMenu .mobile-nav-link');

            function setActiveNav(navKey) {
                if (!navKey) return;

                desktopNavLinks.forEach(link => {
                    if (link.getAttribute('data-nav') === navKey) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });

                mobileNavLinks.forEach(link => {
                    if (link.getAttribute('data-nav') === navKey) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            const currentPath = window.location.pathname;
            if (currentPath.startsWith('/quiz')) {
                setActiveNav('quiz');
            } else if (currentPath.startsWith('/program/')) {
                setActiveNav('program');
            } else {
                // Determine initial active section from hash or default to 'beranda'
                const initialHash = window.location.hash.replace('#', '');
                if (initialHash) {
                    setActiveNav(initialHash);
                } else {
                    setActiveNav('beranda');
                }

                // ScrollSpy using IntersectionObserver
                const spySections = [
                    'beranda',
                    'tentang-kami',
                    'program',
                    'keunggulan',
                    'tutor',
                    'testimoni',
                    'lokasi',
                    'career-center'
                ];

                const sectionElements = spySections
                    .map(id => document.getElementById(id))
                    .filter(el => el !== null);

                if ('IntersectionObserver' in window && sectionElements.length > 0) {
                    const scrollSpyObserver = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                setActiveNav(entry.target.id);
                            }
                        });
                    }, {
                        root: null,
                        rootMargin: '-15% 0px -65% 0px',
                        threshold: 0
                    });

                    sectionElements.forEach(el => scrollSpyObserver.observe(el));
                }
            }

            // Clicking any menu link immediately updates the active indicator
            document.querySelectorAll('.nav-menu-link, .mobile-nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    const navKey = this.getAttribute('data-nav');
                    if (navKey) {
                        setActiveNav(navKey);
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
