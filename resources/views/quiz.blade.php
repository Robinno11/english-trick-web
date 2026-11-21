@extends('layouts.app')

@section('title', 'Tes Kemampuan Kamu Disini | English Trick: No Trick, No Speak')

@section('content')
<div class="reveal-section min-h-screen bg-gradient-to-b from-cyan-50/50 via-white to-pink-50/40 py-10 sm:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Banner -->
        <div class="text-center max-w-2xl mx-auto mb-10 space-y-3">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-100 text-et-cyan-dark text-xs font-black uppercase tracking-wider">
                <span>🎯 Interactive Placement Test</span>
            </div>
            <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Cari Tahu Level Bahasa Inggrismu dalam <span class="text-transparent bg-clip-text bg-gradient-to-r from-et-cyan to-et-pink">15 Menit!</span>
            </h1>
            <p class="text-slate-600 text-sm sm:text-base">
                Asesmen interaktif dengan audio native. Ketahui estimasi CEFR kamu sekarang!
            </p>
        </div>

        <!-- MAIN QUIZ CONTAINER -->
        <div class="bg-white rounded-3xl border-2 border-slate-100 shadow-2xl overflow-hidden p-6 sm:p-10 relative" id="quizContainer">
            
            <!-- STEP 1: PILIH KATEGORI USIA -->
            <div id="stepCategory" class="space-y-8">
                <div class="text-center space-y-2">
                    <span class="text-5xl">🎂</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900">Sesuaikan Level Test</h2>
                    <p class="text-slate-500 text-sm">Pilih kategori test yang sesuai diri anda.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-4 gap-5 max-w-2xl mx-auto">
                    <!-- Kids 
                    <button type="button" onclick="selectCategory('kids')" class="group p-6 rounded-3xl border-2 border-b-[6px] border-cyan-200 hover:border-et-cyan bg-white hover:bg-cyan-50/40 transition-all text-center flex flex-col items-center justify-between min-h-[180px] active:translate-y-1 active:border-b-2">
                        <span class="text-6xl mb-2 group-hover:scale-110 transition-transform">🐣</span>
                        <div>
                            <span class="block font-black text-xl text-slate-900 group-hover:text-et-cyan">Kids</span>
                            <span class="text-xs font-bold text-slate-500">Usia 4 - 8 Tahun</span>
                        </div>
                        <span class="mt-2 text-[11px] font-black text-cyan-600 uppercase">Phonics & Fun Play &rarr;</span>
                    </button> -->

                    <!-- Teens -->
                    <button type="button" onclick="selectCategory('teens')" class="group p-6 rounded-3xl border-2 border-b-[6px] border-pink-200 hover:border-et-pink bg-white hover:bg-pink-50/40 transition-all text-center flex flex-col items-center justify-between min-h-[180px] active:translate-y-1 active:border-b-2">
                        <span class="text-6xl mb-2 group-hover:scale-110 transition-transform">🧒</span>
                        <div>
                            <span class="block font-black text-xl text-slate-900 group-hover:text-et-pink">Young Learners</span>
                            <span class="text-xs font-bold text-slate-500">Usia 9 - 15 Tahun</span>
                        </div>
                        <!-- <span class="mt-2 text-[11px] font-black text-pink-600 uppercase">Confidence & Exam &rarr;</span> -->
                    </button>

                    <!-- Adults -->
                    <button type="button" onclick="selectCategory('adults')" class="group p-6 rounded-3xl border-2 border-b-[6px] border-indigo-200 hover:border-indigo-500 bg-white hover:bg-indigo-50/40 transition-all text-center flex flex-col items-center justify-between min-h-[180px] active:translate-y-1 active:border-b-2">
                        <span class="text-6xl mb-2 group-hover:scale-110 transition-transform">🧑</span>
                        <div>
                            <span class="block font-black text-xl text-slate-900 group-hover:text-indigo-600">Adults</span>
                            <span class="text-xs font-bold text-slate-500">16+ & Mahasiswa/Umum</span>
                        </div>
                        <!-- <span class="mt-2 text-[11px] font-black text-indigo-600 uppercase">Fluency & Career &rarr;</span> -->
                    </button>
                

                    <!-- Benchmark Test -->
                    <button type="button" class="group p-6 rounded-3xl border-2 border-b-[6px] border-indigo-200 hover:border-indigo-500 bg-white hover:bg-indigo-50/40 transition-all text-center flex flex-col items-center justify-between min-h-[180px] active:translate-y-1 active:border-b-2">
                        <span class="text-6xl mb-2 group-hover:scale-110 transition-transform">🧑</span>
                        <div>
                            <span class="block font-black text-xl text-slate-900 group-hover:text-indigo-600">Benchmark Test</span>
                            <span class="text-xs font-bold text-slate-500">Belum Tersedia</span>
                        </div>
                        <!-- <span class="mt-2 text-[11px] font-black text-indigo-600 uppercase">Fluency & Career &rarr;</span> -->
                    </button>
                

                    <!-- Versant Test -->
                    <button type="button" class="group p-6 rounded-3xl border-2 border-b-[6px] border-indigo-200 hover:border-indigo-500 bg-white hover:bg-indigo-50/40 transition-all text-center flex flex-col items-center justify-between min-h-[180px] active:translate-y-1 active:border-b-2">
                        <span class="text-6xl mb-2 group-hover:scale-110 transition-transform">🧑</span>
                        <div>
                            <span class="block font-black text-xl text-slate-900 group-hover:text-indigo-600">Versant Test</span>
                            <span class="text-xs font-bold text-slate-500">Belum Tersedia</span>
                        </div>
                        <!-- <span class="mt-2 text-[11px] font-black text-indigo-600 uppercase">Fluency & Career &rarr;</span> -->
                    </button>
                </div>

                <div class="text-center pt-2">
                    <span class="text-xs text-slate-400">✨ Pastikan kemampuan anda</span>
                </div>
            </div>

            <!-- STEP 2: FORM IDENTITAS PESERTA -->
            <div id="stepIdentity" class="hidden space-y-6 max-w-lg mx-auto">
                <button type="button" onclick="backToStepCategory()" class="text-xs font-bold text-slate-500 hover:text-et-cyan flex items-center gap-1 mb-2">
                    &larr; Ganti Kategori
                </button>

                <div class="text-center space-y-2">
                    <span class="text-4xl" id="identityEmoji">🐣</span>
                    <h2 class="text-2xl font-black text-slate-900">Identitas</h2>
                    <p class="text-xs text-slate-500">Lengkapi data berikut sebelum memulai tes kemampuan bahasa inggris.</p>
                </div>

                <form id="identityForm" onsubmit="startQuiz(event)" class="space-y-4">
                    <div>
                        <label for="quiz_name" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Nama</label>
                        <input type="text" id="quiz_name" required placeholder="Masukan nama panjang" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold">
                    </div>

                    <div>
                        <label for="quiz_whatsapp" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Umur</label>
                        <input type="tel" id="quiz_whatsapp" required placeholder="Masukan umur" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold">
                    </div>

                    <div>
                        <label for="quiz_whatsapp" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">No Whatsapp</label>
                        <input type="tel" id="quiz_whatsapp" required placeholder="081234567890" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold">
                        <span class="text-[11px] text-slate-400 mt-1 block">Untuk mengirimkan hasil asesmen & rekomendasi kelas.</span>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1.5">Apakah anda pernah mengikuti bimbel</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-2 p-3 rounded-2xl border-2 border-slate-200 cursor-pointer hover:border-et-cyan transition-all has-[:checked]:border-et-cyan has-[:checked]:bg-cyan-50/50">
                                <input type="radio" name="quiz_has_bimbel" value="Sudah" onchange="handleBimbelChange(this.value)" class="text-et-cyan focus:ring-et-cyan">
                                <span class="text-sm font-bold text-slate-700">Pernah</span>
                            </label>
                            <label class="flex items-center gap-2 p-3 rounded-2xl border-2 border-slate-200 cursor-pointer hover:border-et-cyan transition-all has-[:checked]:border-et-cyan has-[:checked]:bg-cyan-50/50">
                                <input type="radio" name="quiz_has_bimbel" value="Belum" checked onchange="handleBimbelChange(this.value)" class="text-et-cyan focus:ring-et-cyan">
                                <span class="text-sm font-bold text-slate-700">Belum Pernah</span>
                            </label>
                        </div>
                    </div>

                    <div id="containerBimbelDuration" class="hidden space-y-1">
                        <label for="quiz_bimbel_duration" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Apa Bimbel Yang Pernah Anda Ikuti</label>
                        <select id="quiz_bimbel_duration" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold bg-white">
                            <option value="" disabled selected>-- Pilih Bimbel --</option>
                            <option value="English for Kids">English for Kids</option>
                            <option value="English for Teens (Junior High & High School)">English for Teens (Junior High & High School)</option>
                            <option value="Speaking Booster & General English">Speaking Booster & General English</option>
                            <option value="VIP Private Class 1-on-1">VIP Private Class 1-on-1</option>
                            <option value="TOEFL & IELTS Fast-Track Trick">TOEFL & IELTS Fast-Track Trick</option>
                            <option value="English Trick Intensive Camp">English Trick Intensive Camp</option>
                        </select>

                        <label for="quiz_bimbel_duration" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Berapa Lama Anda Kursus</label>
                        <select id="quiz_bimbel_duration" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold bg-white">
                            <option value="" disabled selected>-- Pilih Durasi --</option>
                            <option value="Kurang dari 6 bulan">&lt; 6 Bulan</option>
                            <option value="6 - 12 bulan">6 - 12 Bulan</option>
                            <option value="1 - 2 tahun">1 - 2 Tahun</option>
                            <option value="Lebih dari 2 tahun">&gt; 2 Tahun</option>
                        </select>

                        <label for="quiz_bimbel_duration" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Dicabang Mana Anda Pernah Mengikuti Bimbel</label>
                        <select id="quiz_bimbel_duration" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold bg-white">
                            <option value="" disabled selected>-- Pilih Cabang --</option>
                            <option value="Karangbong">Karangbong</option>
                            <option value="Damarsi">Damarsi</option>
                            <option value="Taman Pondok Jati">Taman Pondok Jati</option>
                        </select>
                    </div>

                    <div>
                        <label for="quiz_branch" class="block text-xs font-black uppercase text-slate-700 tracking-wider mb-1">Rencana Kursus Di Cabang Mana</label>
                        <select id="quiz_branch" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-et-cyan focus:outline-none text-sm font-semibold bg-white">
                            <option value="" disabled selected>-- Pilih Cabang Terdekat --</option>
                            <option value="Damarsi (Buduran)">📍 Damarsi (Buduran, Sidoarjo)</option>
                            <option value="Karangbong (Gedangan)">📍 Karangbong (Gedangan, Sidoarjo)</option>
                            <option value="Taman Pondok Jati (Geluran/Taman)">📍 Taman Pondok Jati (Geluran, Taman, Sidoarjo)</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-2xl bg-gradient-to-r from-et-cyan to-teal-500 text-white font-black text-base shadow-lg shadow-cyan-500/25 hover:opacity-95 transition-all mt-2">
                        Mulai Mengerjakan Soal
                    </button>
                </form>
            </div>

            
            <!-- STEP 3: QUESTIONS SCREEN -->
<div id="stepQuestions" class="hidden space-y-6">

    <!-- Progress bar & counter -->
    <div>
        <div class="flex items-center justify-between text-xs font-bold text-slate-500 mb-2">
            <span id="questionCounter">Pertanyaan 1 dari 6</span>
            <span id="categoryPill" class="px-2.5 py-0.5 rounded-full text-[11px] font-black uppercase bg-cyan-100 text-et-cyan">Kids Test</span>
        </div>
        <div class="w-full h-2.5 bg-slate-100 rounded-full overflow-hidden border border-slate-200">
            <div id="progressBar" class="h-full bg-gradient-to-r from-et-cyan to-et-pink rounded-full transition-all duration-300 w-1/6"></div>
        </div>
    </div>

    <!-- Top Media / Reading Card (YouTube Player OR Reading Passage) -->
    <div id="topMediaCard" class="bg-gradient-to-br from-slate-50 to-cyan-50/20 p-6 sm:p-8 rounded-3xl border border-slate-200 space-y-4">

        <!-- Mode A: YouTube Embed Player (tampil jika question_type === 'youtube') -->
        <div id="youtubeWrapper" class="hidden">
            <div class="aspect-video w-full rounded-2xl overflow-hidden bg-slate-900 border border-slate-200 shadow-sm">
                <iframe
                    id="youtubeFrame"
                    src=""
                    title="YouTube video player"
                    class="w-full h-full"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Mode B: Story Text di atas (question_type === 'story') -->
    <div id="storyWrapper" class="hidden text-left">
        <p id="storyText" class="text-xs sm:text-sm font-bold text-slate-700 leading-relaxed whitespace-pre-line"></p>
    </div>

        <!-- Mode C: Soal Bacaan / Pertanyaan Biasa (tampil jika question_type === 'reading') -->
        <div id="readingWrapper" class="hidden text-left space-y-3">
            <div id="readingPassage" class="hidden p-4 rounded-2xl bg-white border border-slate-200 text-sm text-slate-700 leading-relaxed"></div>
            <h2 id="topQuestionText" class="text-xl sm:text-2xl font-black text-slate-900 leading-snug">
                Loading question...
            </h2>
            <p id="topSubText" class="text-xs sm:text-sm text-slate-500 font-medium">
                Pilih jawaban yang paling tepat:
            </p>
        </div>

    </div>

    <!-- Soal Khusus Saat Tipe YouTube (diletakkan tepat di atas pilihan jawaban) -->
    <div id="aboveOptionsQuestion" class="hidden space-y-1 pt-1">
        <h2 id="bottomQuestionText" class="text-xl sm:text-2xl font-black text-slate-900 leading-snug"></h2>
        <p id="bottomSubText" class="text-xs sm:text-sm text-slate-500 font-medium"></p>
    </div>

    <!-- Options Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-1" id="optionsContainer">
        <!-- Dynamic Options -->
    </div>

    <!-- Next Button -->
    <div class="pt-4 flex items-center justify-between">
        <span class="text-xs text-slate-400 font-medium">Pilih salah satu jawaban di atas</span>
        <button type="button" id="btnNext" onclick="nextQuestion()" disabled class="px-8 py-3.5 rounded-2xl bg-et-pink text-white font-extrabold text-sm shadow-md disabled:opacity-40 disabled:cursor-not-allowed hover:bg-et-pink-hover transition-all">
            Lanjut Soal Berikutnya &rarr;
        </button>
    </div>

</div>

            <!-- STEP 4: PROCESSING / CALCULATING ANIMATION -->
            <div id="stepProcessing" class="hidden py-16 text-center space-y-6">
                <div class="relative w-24 h-24 mx-auto">
                    <div class="w-24 h-24 rounded-full border-4 border-cyan-100 border-t-et-cyan animate-spin"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-3xl">🤖</div>
                </div>
                <div class="space-y-2">
                    <h3 class="text-2xl font-black text-slate-900" id="processingTitle">Menganalisis Jawabanmu...</h3>
                    <p class="text-xs sm:text-sm text-slate-500 max-w-sm mx-auto" id="processingSub">
                        AI Evaluator sedang menghitung skor akurasi dan kesiapan speaking level kamu.
                    </p>
                </div>
            </div>

            <!-- STEP 5: FINAL REPORT & RESULTS -->
            <div id="stepResults" class="hidden space-y-8">
                
                <!-- Result Banner -->
                <div class="bg-gradient-to-r from-cyan-500 via-teal-500 to-et-pink p-8 sm:p-10 rounded-3xl text-white text-center space-y-4 shadow-xl relative overflow-hidden">
                    <span class="text-xs font-black uppercase tracking-widest px-3 py-1 rounded-full bg-white/20">English Trick Level Report</span>
                    <h2 class="text-3xl sm:text-4xl font-black">
                        Luar Biasa🎉
                    </h2>
                    <p class="text-sm text-cyan-100 max-w-md mx-auto">
                        Kamu telah menyelesaikan tes penempatan level bahasa Inggris dengan sangat baik.
                    </p>

                    <div class="grid grid-cols-2 gap-4 max-w-sm mx-auto pt-2">
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 text-center">
                            <span class="text-xs text-cyan-100 block font-semibold">Skor Akurasi</span>
                            <span class="text-3xl sm:text-4xl font-black" id="resScore">85%</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 text-center">
                            <span class="text-xs text-cyan-100 block font-semibold">Estimasi CEFR</span>
                            <span class="text-2xl sm:text-3xl font-black" id="resCefr">A2 Flyers</span>
                        </div>
                    </div>
                </div>

                <!-- Placement Test Identitas Summary Card -->
                <div class="bg-white p-6 rounded-3xl border-2 border-slate-100 shadow-md space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-black text-slate-900 text-sm uppercase tracking-wider flex items-center gap-2">
                            <span>📋</span> Identitas
                        </h3>
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black uppercase bg-emerald-100 text-emerald-700">Hasil Selesai</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-slate-400 block mb-0.5">Nama</span>
                            <span class="font-extrabold text-slate-800" id="resIdentityName">-</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-slate-400 block mb-0.5">Umur</span>
                            <span class="font-extrabold text-slate-800" id="resIdentityWhatsapp">-</span>
                        </div>
                        <!-- <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-slate-400 block mb-0.5">Bimbel?</span>
                            <span class="font-extrabold text-slate-800" id="resIdentityBimbel">-</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-slate-400 block mb-0.5">If sudah berapa lama?</span>
                            <span class="font-extrabold text-slate-800" id="resIdentityDuration">-</span>
                        </div> -->
                        <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-slate-400 block mb-0.5">Rencana Kursus</span>
                            <span class="font-extrabold text-slate-800" id="resIdentityBranch">-</span>
                        </div>
                        <div class="p-3 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl border border-emerald-200">
                            <span class="text-[11px] font-black uppercase tracking-wider text-emerald-600 block mb-0.5">Skor</span>
                            <span class="font-black text-emerald-700 text-lg" id="resIdentityScore">-</span>
                        </div>
                    </div>
                </div>

                <!-- Skill Breakdown Progress -->
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 space-y-4">
                    <h3 class="font-black text-slate-900 text-sm uppercase tracking-wider">Analisis Kemampuanmu:</h3>
                    
                    <!-- UBAH BARIS DI BAWAH INI -->
                    <div class="space-y-3 blur-sm select-none pointer-events-none">
                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                <span>Vocabulary & Kosakata</span>
                                <span id="resVocab">85%</span>
                            </div>
                            <div class="w-full h-2 bg-white rounded-full overflow-hidden border border-slate-200">
                                <div id="barVocab" class="h-full bg-cyan-500 rounded-full w-0 transition-all duration-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                <span>Grammar & Trick Mastery</span>
                                <span id="resGrammar">80%</span>
                            </div>
                            <div class="w-full h-2 bg-white rounded-full overflow-hidden border border-slate-200">
                                <div id="barGrammar" class="h-full bg-et-pink rounded-full w-0 transition-all duration-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-700 mb-1">
                                <span>Speaking & Fluency Readiness</span>
                                <span id="resSpeaking">90%</span>
                            </div>
                            <div class="w-full h-2 bg-white rounded-full overflow-hidden border border-slate-200">
                                <div id="barSpeaking" class="h-full bg-emerald-500 rounded-full w-0 transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recommended Program Card 
                <div class="p-6 rounded-3xl bg-white border-2 border-et-cyan shadow-lg space-y-3">
                    <span class="text-xs font-black uppercase text-et-pink bg-pink-50 px-3 py-1 rounded-full" id="recBadge">Rekomendasi Kelas</span>
                    <h3 class="text-xl font-black text-slate-900" id="recTitle">Program Kursus</h3>
                    <p class="text-sm text-slate-600 leading-relaxed" id="recDesc">Deskripsi rekomendasi program terbaik.</p>
                </div> -->

                <!-- Action Button to WhatsApp -->
                <div class="space-y-3 pt-2">
                    <a id="btnClaimWa" href="#" target="_blank" class="w-full py-4 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white font-black text-base text-center shadow-xl shadow-emerald-500/25 flex items-center justify-center gap-2 hover:scale-[1.01] transition-all">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Konsultasikan Program Les Yang Cocok Untukmu</span>
                    </a>

                    <div class="flex items-center justify-center gap-4 pt-2">
                        <button type="button" onclick="location.reload()" class="text-xs font-bold text-slate-500 hover:text-et-cyan">
                            🔄 Ulangi Quiz
                        </button>
                        <span>•</span>
                        <a href="{{ route('home') }}" class="text-xs font-bold text-slate-500 hover:text-et-cyan">
                            🏠 Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Quiz State
    let quizState = {
        category: 'kids',
        name: '',
        whatsapp: '',
        has_bimbel: 'Belum',
        bimbel_duration: '',
        branch: '',
        questions: [],
        currentIndex: 0,
        answers: {}, // questionId -> selectedIndex
    };

    function stripEmoji(text = '') {
        return String(text)
            .replace(/[\p{Emoji_Presentation}\p{Extended_Pictographic}]/gu, '')
            .replace(/\s{2,}/g, ' ')
            .trim();
    }

    function extractYouTubeId(urlOrId = '') {
        if (!urlOrId) return '';
        const match = String(urlOrId).match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|shorts\/))([A-Za-z0-9_-]{11})/);
        return match ? match[1] : String(urlOrId).trim();
    }

    function handleBimbelChange(val) {
        quizState.has_bimbel = val;
        const container = document.getElementById('containerBimbelDuration');
        const durationSelect = document.getElementById('quiz_bimbel_duration');
        if (val === 'Sudah') {
            container.classList.remove('hidden');
            durationSelect.required = true;
        } else {
            container.classList.add('hidden');
            durationSelect.required = false;
            durationSelect.value = '';
            quizState.bimbel_duration = '';
        }
    }

    // Step 1: Select Category
    function selectCategory(cat) {
        quizState.category = cat;
        const emojiMap = { 'kids': '🐣', 'teens': '🧒', 'adults': '🧑' };
        document.getElementById('identityEmoji').textContent = emojiMap[cat] || '🎯';
        
        document.getElementById('stepCategory').classList.add('hidden');
        document.getElementById('stepIdentity').classList.remove('hidden');
    }

    function backToStepCategory() {
        document.getElementById('stepIdentity').classList.add('hidden');
        document.getElementById('stepCategory').classList.remove('hidden');
    }

    // Step 2: Start Quiz & Fetch questions
    async function startQuiz(e) {
        e.preventDefault();
        quizState.name = document.getElementById('quiz_name').value.trim();
        quizState.whatsapp = document.getElementById('quiz_whatsapp').value.trim();

        const bimbelRadio = document.querySelector('input[name="quiz_has_bimbel"]:checked');
        quizState.has_bimbel = bimbelRadio ? bimbelRadio.value : 'Belum';

        if (quizState.has_bimbel === 'Sudah') {
            quizState.bimbel_duration = document.getElementById('quiz_bimbel_duration').value;
            if (!quizState.bimbel_duration) {
                alert('Mohon pilih berapa lama sudah mengikuti bimbel sebelumnya.');
                return;
            }
        } else {
            quizState.bimbel_duration = '-';
        }

        quizState.branch = document.getElementById('quiz_branch').value;
        if (!quizState.branch) {
            alert('Mohon pilih cabang terdekat.');
            return;
        }

        if (!quizState.name || !quizState.whatsapp) {
            alert('Mohon lengkapi nama dan nomor WhatsApp.');
            return;
        }

        try {
            const res = await fetch(`/quiz/api/questions?category=${quizState.category}`);
            const data = await res.json();
            
            if (data.status === 'success' && data.questions.length > 0) {
                quizState.questions = data.questions;
                quizState.currentIndex = 0;
                quizState.answers = {};

                document.getElementById('stepIdentity').classList.add('hidden');
                document.getElementById('stepQuestions').classList.remove('hidden');
                renderCurrentQuestion();
            } else {
                alert('Pertanyaan belum tersedia untuk kategori ini.');
            }
        } catch (err) {
            console.error('Detail error saat memuat/merender soal:', err);
            alert('Gagal memuat pertanyaan: ' + (err.message || err));
        }
    }

    // Step 3: Render Question (YouTube vs Reading/Pertanyaan Biasa, tanpa emoji)
    function renderCurrentQuestion() {
        const q = quizState.questions[quizState.currentIndex];
    if (!q) return;

    const total = quizState.questions.length;
    const currentNum = quizState.currentIndex + 1;

    document.getElementById('questionCounter').textContent = `Pertanyaan ${currentNum} dari ${total}`;
    document.getElementById('progressBar').style.width = `${(currentNum / total) * 100}%`;

    const catLabels = {
        'kids': 'Kids Test (4-8 Thn)',
        'teens': 'Teens Test (9-15 Thn)',
        'adults': 'Adults Test (16+ Thn)'
    };
    document.getElementById('categoryPill').textContent = catLabels[quizState.category] || 'Level Test';
        const cleanQuestion = stripEmoji(q.question || '');
        const cleanSubText = stripEmoji(q.sub_text || 'Pilih jawaban yang paling tepat:');
        const cleanReading = stripEmoji(q.reading_text || '');
        const cleanStory = stripEmoji(q.story_text || '');
        const normalizedType = String(q.question_type || '').trim().toLowerCase();

        const isYouTube = normalizedType === 'youtube' || (!normalizedType && Boolean(q.youtube_url || q.youtube_id));
        const isStory = normalizedType === 'story';

        const youtubeWrapper = document.getElementById('youtubeWrapper');
        const youtubeFrame = document.getElementById('youtubeFrame');
        const storyWrapper = document.getElementById('storyWrapper');
        const storyText = document.getElementById('storyText');
        const readingWrapper = document.getElementById('readingWrapper');
        const readingPassage = document.getElementById('readingPassage');
        const topQuestionText = document.getElementById('topQuestionText');
        const topSubText = document.getElementById('topSubText');
        const aboveOptionsQuestion = document.getElementById('aboveOptionsQuestion');
        const bottomQuestionText = document.getElementById('bottomQuestionText');
        const bottomSubText = document.getElementById('bottomSubText');

        // Reset semua mode sebelum merender soal aktif
        if (youtubeFrame) youtubeFrame.src = '';
        if (youtubeWrapper) youtubeWrapper.classList.add('hidden');
        if (storyWrapper) storyWrapper.classList.add('hidden');
        if (storyText) storyText.textContent = '';
        if (readingWrapper) readingWrapper.classList.add('hidden');
        if (readingPassage) {
            readingPassage.classList.add('hidden');
            readingPassage.textContent = '';
        }
        if (aboveOptionsQuestion) aboveOptionsQuestion.classList.add('hidden');

        if (isYouTube) {
            const videoId = extractYouTubeId(q.youtube_url || q.youtube_id);
            if (videoId && youtubeFrame && youtubeWrapper) {
                youtubeFrame.src = `https://www.youtube.com/embed/${videoId}?rel=0`;
                youtubeWrapper.classList.remove('hidden');
            }
            if (bottomQuestionText) bottomQuestionText.textContent = cleanQuestion;
            if (bottomSubText) bottomSubText.textContent = cleanSubText;
            if (aboveOptionsQuestion) aboveOptionsQuestion.classList.remove('hidden');
        } else if (isStory) {
            if (storyText) storyText.textContent = cleanStory;
            if (storyWrapper) storyWrapper.classList.remove('hidden');

            if (bottomQuestionText) bottomQuestionText.textContent = cleanQuestion;
            if (bottomSubText) bottomSubText.textContent = cleanSubText;
            if (aboveOptionsQuestion) aboveOptionsQuestion.classList.remove('hidden');
        } else {
            if (cleanReading && readingPassage) {
                readingPassage.textContent = cleanReading;
                readingPassage.classList.remove('hidden');
            }
            if (topQuestionText) topQuestionText.textContent = cleanQuestion;
            if (topSubText) topSubText.textContent = cleanSubText;
            if (readingWrapper) readingWrapper.classList.remove('hidden');
        }

        // Render options
        const container = document.getElementById('optionsContainer');
        container.innerHTML = '';

        let optionImages = [];
        if (Array.isArray(q.option_images)) {
            optionImages = q.option_images;
        } else if (typeof q.option_images === 'string' && q.option_images.trim() !== '') {
            try {
                const parsed = JSON.parse(q.option_images);
                if (Array.isArray(parsed)) optionImages = parsed;
            } catch (e) {
                optionImages = [];
            }
        }

        const hasImageOptions = optionImages.some((img) => typeof img === 'string' && img.trim() !== '');

        container.className = hasImageOptions
            ? 'grid grid-cols-1 sm:grid-cols-2 gap-3'
            : 'grid grid-cols-1 gap-3';

        const previouslySelected = quizState.answers[q.id];

        q.options.forEach((opt, idx) => {
            const isSelected = (previouslySelected !== undefined && previouslySelected === idx);
            const btn = document.createElement('button');
            btn.type = 'button';
            const letter = String.fromCharCode(65 + idx); // A, B, C, D
            const rawImg = typeof optionImages[idx] === 'string' ? optionImages[idx].trim() : '';
            const isImageOption = rawImg !== '';

            btn.className = `option-btn p-4 rounded-2xl border-2 text-left font-bold text-sm transition-all flex ${
                isImageOption ? 'flex-col items-start gap-3' : 'items-center gap-3'
            } ${
                isSelected
                    ? 'border-et-cyan bg-cyan-50 text-et-cyan shadow-sm'
                    : 'border-slate-200 bg-white hover:border-slate-300 text-slate-700'
            }`;

            const badge = document.createElement('span');
            badge.className = `w-8 h-8 rounded-xl ${
                isSelected ? 'bg-et-cyan text-white' : 'bg-slate-100 text-slate-600'
            } flex items-center justify-center font-black text-xs shrink-0`;
            badge.textContent = letter;

            if (isImageOption) {
                // Hanya badge huruf (A, B, C) + gambar tanpa teks deskripsi
                btn.appendChild(badge);

                const img = document.createElement('img');
                img.src = rawImg;
                img.alt = `Pilihan ${letter}`;
                img.loading = 'lazy';
                img.className = 'w-full max-h-48 object-contain rounded-xl bg-slate-50';
                img.onerror = () => img.remove();
                btn.appendChild(img);
            } else {
                // Mode opsi teks biasa (seperti semula)
                btn.innerHTML = `
                    <span class="w-8 h-8 rounded-xl ${isSelected ? 'bg-et-cyan text-white' : 'bg-slate-100 text-slate-600'} flex items-center justify-center font-black text-xs shrink-0">${letter}</span>
                    <span class="leading-snug">${stripEmoji(opt)}</span>
                `;
            }

            btn.onclick = () => selectOption(q.id, idx);
            container.appendChild(btn);
        });

        const btnNext = document.getElementById('btnNext');
        btnNext.disabled = (previouslySelected === undefined);
        btnNext.textContent = (currentNum === total) ? 'Selesai & Lihat Hasil' : 'Lanjut Soal Berikutnya →';
    }

    function selectOption(questionId, optionIndex) {
        quizState.answers[questionId] = optionIndex;
        renderCurrentQuestion();
    }

    function nextQuestion() {
        if ('speechSynthesis' in window) {
            window.speechSynthesis.cancel();
        }
        const wave = document.getElementById('audioWave');
        if (wave) wave.classList.add('hidden');

        if (quizState.currentIndex < quizState.questions.length - 1) {
            quizState.currentIndex++;
            renderCurrentQuestion();
        } else {
            finishQuiz();
        }
    }

    // Audio Speech Synthesis (tetap dipertahankan jika masih dipakai soal non-YouTube)
    function playAudioSpeech() {
        const speechText = q.speech_text || q.question;

        if ('speechSynthesis' in window) {
            window.speechSynthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(stripEmoji(speechText));
            utterance.lang = 'en-US';
            utterance.rate = (quizState.category === 'kids') ? 0.85 : 0.95;

            const wave = document.getElementById('audioWave');
            if (wave) wave.classList.remove('hidden');

            utterance.onend = () => {
                if (wave) wave.classList.add('hidden');
            };
            utterance.onerror = () => {
                if (wave) wave.classList.add('hidden');
            };

            window.speechSynthesis.speak(utterance);
        } else {
            alert('Perangkat Anda tidak mendukung Web Speech API.');
        }
    }

    // Step 4: Submit and display animated results
    async function finishQuiz() {
        if ('speechSynthesis' in window) {
            window.speechSynthesis.cancel();
        }
        const youtubeFrame = document.getElementById('youtubeFrame');
        if (youtubeFrame) youtubeFrame.src = '';

        document.getElementById('stepQuestions').classList.add('hidden');
        document.getElementById('stepProcessing').classList.remove('hidden');

        const stages = [
            'Mengumpulkan jawaban kamu...',
            'Menganalisis kemampuan Speaking & Kosakata...',
            'Menentukan Level CEFR Standar Internasional...',
            'Menyiapkan Rekomendasi Program English Trick...'
        ];

        let stageIdx = 0;
        const stageInterval = setInterval(() => {
            stageIdx++;
            if (stageIdx < stages.length) {
                document.getElementById('processingTitle').textContent = stages[stageIdx];
            }
        }, 600);

        try {
            const res = await fetch('/quiz/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: quizState.name,
                    whatsapp: quizState.whatsapp,
                    has_bimbel: quizState.has_bimbel,
                    bimbel_duration: quizState.bimbel_duration,
                    branch: quizState.branch,
                    category: quizState.category,
                    answers: quizState.answers,
                })
            });

            clearInterval(stageInterval);
            const data = await res.json();

            if (data.status === 'success') {
                setTimeout(() => {
                    displayResults(data);
                }, 800);
            } else {
                alert(data.message || 'Gagal mengirim hasil. Silakan coba lagi.');
                document.getElementById('stepProcessing').classList.add('hidden');
                document.getElementById('stepQuestions').classList.remove('hidden');
            }
        } catch (err) {
            clearInterval(stageInterval);
            alert('Koneksi terganggu. Silakan coba lagi.');
            document.getElementById('stepProcessing').classList.add('hidden');
            document.getElementById('stepQuestions').classList.remove('hidden');
        }
    }

    // Step 5: Display Results
    function displayResults(rawData) {
        const data = (rawData && (rawData.data || rawData.result)) ? (rawData.data || rawData.result) : (rawData || {});

        const setText = (id, value) => {
            const el = document.getElementById(id);
            if (el) el.textContent = value;
        };

        const setWidth = (id, pct) => {
            const el = document.getElementById(id);
            if (el) el.style.width = `${pct}%`;
        };

        const stepProcessing = document.getElementById('stepProcessing');
        const stepResults = document.getElementById('stepResults');
        if (stepProcessing) stepProcessing.classList.add('hidden');
        if (stepResults) stepResults.classList.remove('hidden');

        const scoreVal = data.score ?? 0;
        const correctCount = data.correct_answers ?? 0;
        const totalCount = data.total_questions ?? (Array.isArray(quizState.questions) ? quizState.questions.length : 0);

        setText('resName', data.name || quizState.name || '-');
        setText('resScore', `${scoreVal}%`);
        setText('resCefr', data.cefr_level || '-');

        setText('resIdentityName', data.name || quizState.name || '-');
        setText('resIdentityWhatsapp', data.whatsapp || quizState.whatsapp || '-');
        setText('resIdentityBimbel', data.has_bimbel || quizState.has_bimbel || '-');
        setText('resIdentityDuration', (data.has_bimbel === 'Sudah' ? (data.bimbel_duration || quizState.bimbel_duration || '-') : '-'));
        setText('resIdentityBranch', data.branch || quizState.branch || '-');
        setText('resIdentityScore', `${scoreVal}% (${correctCount}/${totalCount} Benar)`);

        const sb = data.skill_breakdown || {};
        const vocab = sb.vocabulary ?? 80;
        const grammar = sb.grammar ?? 75;
        const speaking = sb.speaking ?? 85;

        setText('resVocab', `${vocab}%`);
        setWidth('barVocab', vocab);

        setText('resGrammar', `${grammar}%`);
        setWidth('barGrammar', grammar);

        setText('resSpeaking', `${speaking}%`);
        setWidth('barSpeaking', speaking);

        if (data.recommended_program) {
            setText('recBadge', data.recommended_program.badge || 'Rekomendasi Kelas');
            setText('recTitle', data.recommended_program.title || '');
            setText('recDesc', data.recommended_program.description || '');
        }

        const btnClaimWa = document.getElementById('btnClaimWa');
        if (btnClaimWa && data.whatsapp_url) {
            btnClaimWa.href = data.whatsapp_url;
        }

        const reviewList = document.getElementById('reviewList');
        if (reviewList) {
            reviewList.innerHTML = '';
            const reviewSection = reviewList.closest('section, div[id*="review"], .review-section');
            if (reviewSection && reviewSection !== reviewList) {
                reviewSection.classList.add('hidden');
            }
        }
    }
</script>
@endpush