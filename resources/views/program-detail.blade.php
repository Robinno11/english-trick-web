@extends('layouts.app')

@section('title', $program->name . ' - English Trick Damarsi Sidoarjo')

@section('content')
<section class="reveal-section py-16 bg-slate-50 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs font-bold text-slate-500 mb-6">
            <a href="{{ route('home') }}" class="hover:text-et-cyan">Beranda</a>
            <span>/</span>
            <a href="{{ route('home') }}#program" class="hover:text-et-cyan">Program Kursus</a>
            <span>/</span>
            <span class="text-slate-800">{{ $program->name }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Program Info -->
            <div class="lg:col-span-8 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm space-y-8">
                
                <div class="space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-50 text-et-cyan font-bold text-xs">
                        <span>{{ $program->age_group }}</span>
                        @if($program->badge)
                        <span>•</span>
                        <span class="text-et-pink font-extrabold">{{ $program->badge }}</span>
                        @endif
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                        {{ $program->name }}
                    </h1>
                    <p class="text-base text-et-cyan font-bold">
                        "{{ $program->tagline }}"
                    </p>
                </div>

                <div class="border-t border-slate-100 pt-6">
                    <h3 class="text-lg font-black text-slate-900 mb-3">Tentang Program Ini</h3>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        {{ $program->description }}
                    </p>
                </div>

                <div class="border-t border-slate-100 pt-6">
                    <h3 class="text-lg font-black text-slate-900 mb-4">Keunggulan & Fasilitas yang Kamu Dapatkan:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($program->features as $f)
                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-100 text-sm font-semibold text-slate-800">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs">✓</span>
                            <span>{{ $f }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="border-t border-slate-100 pt-6 bg-cyan-50/40 p-6 rounded-2xl border border-cyan-100">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">💡</span>
                        <div>
                            <h4 class="font-extrabold text-slate-900 text-sm">Metode "No Trick, No Speak"</h4>
                            <p class="text-xs text-slate-600">
                                Di kelas ini kamu akan dibekali formula kalimat instan dan latihan speaking 80% dari durasi belajar, sehingga berbicara bahasa Inggris tidak lagi menjadi beban.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Booking Box -->
            <div class="lg:col-span-4 bg-white rounded-3xl p-7 border border-slate-200 shadow-xl space-y-6 sticky top-28">
                
                <div>
                    <span class="text-xs font-bold text-slate-400 block uppercase tracking-wider">Biaya Investasi Mulai Dari</span>
                    <p class="text-3xl font-black text-slate-900">{{ $program->price_starting }}</p>
                    <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md inline-block mt-1">Free Trial Session Termasuk</span>
                </div>

                <div class="border-t border-slate-100 pt-4 space-y-3">
                    <a href="https://api.whatsapp.com/send?phone=6285385120633&text={{ urlencode('Halo Admin English Trick Karangbong Sidoarjo! Saya berminat mendaftar program: ' . $program->name . '. Mohon info jadwal terdekat dan promo pendaftarannya.') }}" target="_blank" rel="noopener noreferrer" class="w-full py-4 rounded-2xl bg-et-pink hover:bg-et-pink-hover text-white font-extrabold text-sm text-center shadow-lg shadow-pink-500/25 flex items-center justify-center gap-2 transition-all">
                        <span>Daftar via WhatsApp &rarr;</span>
                    </a>

                    <a href="{{ route('quiz.index') }}" class="w-full py-3.5 rounded-2xl border-2 border-et-cyan text-et-cyan hover:bg-et-cyan hover:text-white font-bold text-sm text-center flex items-center justify-center gap-2 transition-all">
                        <span>Ikuti Level Test Dulu</span>
                    </a>
                </div>

                <div class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                    <div class="flex items-center gap-2">
                        <span class="text-slate-400">📍</span>
                        <span>Cabang Damarsi, Buduran, Sidoarjo</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-slate-400">🕒</span>
                        <span>Jadwal Fleksibel (Pagi / Sore / Weekend)</span>
                    </div>
                </div>

            </div>

        </div>

        <!-- Other Programs -->
        @if(count($otherPrograms) > 0)
        <div class="mt-20">
            <h3 class="text-2xl font-black text-slate-900 mb-6">Program Kursus Lainnya</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($otherPrograms as $other)
                <div class="bg-white p-6 rounded-2xl border border-slate-200 card-hover flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-slate-500">{{ $other->age_group }}</span>
                        <h4 class="font-black text-base text-slate-900 mt-1 mb-2">{{ $other->name }}</h4>
                        <p class="text-xs text-slate-600 line-clamp-2 mb-4">{{ $other->description }}</p>
                    </div>
                    <a href="{{ route('program.detail', $other->slug) }}" class="text-xs font-bold text-et-cyan hover:underline">
                        Lihat Program &rarr;
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
