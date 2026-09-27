
@extends('layouts.app')

@section('content')

<!-- 1. HERO WITH CAROUSEL -->
<section id="beranda" class="relative isolate h-[88vh] min-h-[560px] w-full overflow-hidden">
    <div id="carousel" class="absolute inset-0">
        @forelse($heroImages as $i => $image)
            <div class="carousel-slide {{ $image['active'] ? 'active' : '' }}" style="background-image:url('{{ $image['url'] }}')"></div>
        @empty
            <div class="carousel-slide active bg-primary-900"></div>
        @endforelse
    </div>

    <div class="absolute inset-0 bg-primary-900/60"></div>

    <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col items-center justify-center -mt-9 px-4 text-center text-white sm:px-6 lg:px-8">
        <!-- Partner Logos Top -->
        <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-6 opacity-90 mb-10">
            @foreach(['DIKTISAINTEK.png', 'UNISA.png', 'Dit. Minat Saintek.png', 'Semesta (3).png', 'Logo RTMS UNISA (1).png'] as $logo)
                <img src="{{ asset($logo) }}" alt="Partner Logo" class="h-10 w-auto">
            @endforeach
        </div>

        <h1 class="hero-fade-in hero-fade-in-delay-2 font-display text-6xl font-extrabold tracking-[0.05em] text-white drop-shadow-md sm:text-7xl lg:text-8xl">
            RESONA SAINTEK
        </h1>

        <p class="hero-fade-in hero-fade-in-delay-3 mt-6 flex flex-wrap items-center justify-center gap-x-3 gap-y-1 text-base font-semibold tracking-wide sm:text-lg">
            <span class="text-accent-400">Riset Tepat</span>
            <span class="h-1 w-1 rounded-full bg-white/70" aria-hidden="true"></span>
            <span class="text-white">Masyarakat Sehat</span>
        </p>

        <div class="hero-fade-in hero-fade-in-delay-3 mt-12 flex flex-col items-center gap-3 sm:flex-row">
            <a href="#tentang" class="btn-primary !rounded-2xl !px-7 !py-3.5 text-base shadow-xl">
                Pelajari Lebih Lanjut
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </a>
            <a href="#inovasi" class="inline-flex items-center gap-2 rounded-2xl border border-white/30 bg-white/5 px-7 py-3.5 text-base font-semibold text-white backdrop-blur-md transition hover:bg-white/15 active:scale-95">
                Lihat Inovasi Kami
            </a>
        </div>
    </div>



    <div class="absolute bottom-6 left-1/2 z-10 -translate-x-1/2">
        <a href="#tentang" aria-label="Scroll down" class="flex h-10 w-6 items-start justify-center rounded-full border-2 border-white/40 p-1.5 transition hover:border-accent-300">
            <span class="h-2 w-1 animate-bounce rounded-full bg-white/80"></span>
        </a>
    </div>

    @if(count($heroImages) > 1)
    <div class="absolute bottom-6 right-6 z-10 hidden gap-2 sm:flex">
        <button id="carousel-prev" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 text-white backdrop-blur-md transition hover:bg-white/20" aria-label="Previous">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="carousel-next" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 text-white backdrop-blur-md transition hover:bg-white/20" aria-label="Next">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
    </div>
    @endif
</section>

<!-- 2. TENTANG KAMI -->
<section id="tentang" class="relative py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="reveal">
                <div class="relative">
                    <div class="absolute -inset-4 rounded-[2rem] bg-gradient-to-br from-primary-200 via-accent-200 to-primary-100 opacity-70 blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[2rem] border border-white shadow-soft">
                        <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?auto=format&fit=crop&w=1200&q=80" alt="Tentang RESONA SAINTEK" class="h-[420px] w-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-primary-900/70 via-primary-900/20 to-transparent p-6">
                            <p class="font-display text-lg font-bold text-white">Berbasis Ilmu, Berdampak Nyata.</p>
                        </div>
                    </div>
                    <div class="absolute -right-4 -top-4 flex h-24 w-24 items-center justify-center rounded-3xl bg-accent-400 text-center text-sm font-extrabold leading-tight text-primary-900 shadow-soft sm:text-base">
                        100%<br>Evidence Based
                    </div>
                </div>
            </div>

            <div class="reveal">
                <span class="inline-flex items-center gap-2 rounded-full border border-primary-200 bg-primary-50 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-primary-700">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>
                    Tentang Kami
                </span>
                <h2 class="mt-5 font-display text-3xl font-extrabold leading-tight text-stone-900 sm:text-4xl lg:text-5xl">
                    <span class="text-primary-600">Resona Saintek</span> Komunikasi Sains untuk <span class="text-accent-600">Kebaikan Bersama</span>
                </h2>
                <p class="mt-6 text-base leading-relaxed text-stone-600 sm:text-lg">
                    <strong class="text-stone-800">Resona Saintek "Riset Tepat, Masyarakat Sehat"</strong> merupakan
                    <em>campaign komunikasi sains</em> yang digagas oleh <strong>Humas dan Protokol
                    Universitas 'Aisyiyah Yogyakarta (UNISA Yogyakarta)</strong> sebagai upaya menjembatani
                    hasil riset dengan kebutuhan masyarakat.
                </p>
                <p class="mt-4 text-base leading-relaxed text-stone-600">
                    Melalui pendekatan <strong>science storytelling</strong>, Humas dan Protokol mengemas
                    hasil penelitian dan inovasi UNISA Yogyakarta menjadi informasi yang mudah dipahami,
                    relevan, inspiratif, dan berdampak bagi masyarakat.
                </p>
                <p class="mt-4 text-base leading-relaxed text-stone-600">
                    Resona Saintek menjadi ruang kolaborasi antara peneliti, sivitas akademika, media,
                    pemerintah, tenaga kesehatan, komunitas, dan masyarakat untuk memastikan bahwa
                    riset tidak berhenti sebagai publikasi, tetapi hadir dan memberi manfaat nyata
                    bagi kehidupan.
                </p>

                <div class="mt-8 grid grid-cols-3 gap-4">
                    <div class="rounded-2xl border border-stone-200 bg-white p-4 text-center shadow-soft">
                        <div class="font-display text-2xl font-extrabold text-primary-600">🎓</div>
                        <div class="mt-1 text-xs font-medium text-stone-500">UNISA Yogyakarta</div>
                    </div>
                    <div class="rounded-2xl border border-stone-200 bg-white p-4 text-center shadow-soft">
                        <div class="font-display text-2xl font-extrabold text-primary-600">📣</div>
                        <div class="mt-1 text-xs font-medium text-stone-500">Humas &amp; Protokol</div>
                    </div>
                    <div class="rounded-2xl border border-stone-200 bg-white p-4 text-center shadow-soft">
                        <div class="font-display text-2xl font-extrabold text-accent-500">📖</div>
                        <div class="mt-1 text-xs font-medium text-stone-500">Science Storytelling</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. MENGAPA "RISET TEPAT, MASYARAKAT SEHAT" -->
<section id="mengapa" class="relative bg-gradient-to-b from-white to-surface-50 py-24 sm:py-28">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary-300/50 to-transparent"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center reveal">
            <span class="inline-flex items-center gap-2 rounded-full border border-accent-300 bg-accent-100 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-accent-700">
                <span class="h-1.5 w-1.5 rounded-full bg-accent-500"></span>
                Mengapa RESONA SAINTEK  
            </span>
            <h2 class="mt-5 font-display text-3xl font-extrabold leading-tight text-stone-900 sm:text-4xl lg:text-5xl">
                Mengapa <span class="text-primary-600">"Riset Tepat, Masyarakat Sehat"</span>?
            </h2>
            <p class="mt-5 text-base leading-relaxed text-stone-600 sm:text-lg">
                Tantangan kesehatan masyarakat terus berkembang dan arus informasi digital semakin deras.
                Resona Saintek hadir untuk memastikan bahwa setiap orang mendapatkan akses informasi
                kesehatan yang tepat, kredibel, dan berbasis bukti — agar riset benar-benar membawa
                manfaat nyata bagi seluruh lapisan masyarakat.
            </p>
        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($reasons as $i => $r)
            <div class="reveal card-hover group rounded-3xl border border-stone-200 bg-white p-6 shadow-soft" style="transition-delay:{{ $i * 80 }}ms">
                <div class="chip-icon group-hover:from-primary-200 group-hover:to-accent-300">{{ $r['icon'] }}</div>
                <h3 class="mt-5 font-display text-lg font-bold text-stone-900">{{ $r['title'] }}</h3>
                <p class="mt-2 text-sm leading-relaxed text-stone-600">{{ $r['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 4. INOVASI -->
<section id="inovasi" class="relative py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end reveal">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-primary-200 bg-primary-50 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-primary-700">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>
                    Inovasi
                </span>
                <h2 class="mt-5 font-display text-3xl font-extrabold leading-tight text-stone-900 sm:text-4xl lg:text-5xl">
                    Inovasi Riset <span class="text-primary-600">UNISA Yogyakarta</span>
                </h2>
                <p class="mt-5 text-base leading-relaxed text-stone-600 sm:text-lg">
                    Karya inovatif hasil penelitian dan pengembangan UNISA Yogyakarta yang lahir
                    dari kebutuhan nyata masyarakat di bidang kesehatan perempuan, keluarga,
                    dan kelompok rentan.
                </p>
            </div>
            <a href="#medsos" class="btn-ghost hidden md:inline-flex">Hubungi Kami →</a>
        </div>

        <div class="mt-14 flex flex-wrap justify-center gap-6">
            @foreach($innovations as $i => $in)
            <article class="reveal card-hover group flex w-full flex-col overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-soft sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]" style="transition-delay:{{ $i * 80 }}ms">
                <div class="flex h-40 items-center justify-center bg-gradient-to-br from-primary-50 via-white to-accent-100">
                    <div class="text-6xl transition group-hover:scale-110">{{ $in['icon'] }}</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="font-display text-xl font-bold text-stone-900">{{ $in['title'] }}</h3>
                    <p class="mt-3 flex-1 text-sm leading-relaxed text-stone-600">{{ $in['description'] }}</p>
                    <div class="mt-5 flex items-center justify-between border-t border-stone-100 pt-4">
                        <span class="text-xs font-semibold uppercase tracking-wider text-primary-600">Riset &amp; Pengembangan</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<!-- 5. MEDIA SOSIAL (DARI DATABASE) -->
<section id="medsos" class="relative bg-gradient-to-b from-surface-50 to-white py-24 sm:py-28">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-accent-300/60 to-transparent"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center reveal">
            <span class="inline-flex items-center gap-2 rounded-full border border-accent-300 bg-accent-100 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-accent-700">
                <span class="h-1.5 w-1.5 rounded-full bg-accent-500 animate-pulse"></span>
                Media Sosial
            </span>
            <h2 class="mt-5 font-display text-3xl font-extrabold leading-tight text-stone-900 sm:text-4xl lg:text-5xl">
                Terhubung dengan <span class="text-primary-600">Kami</span>
            </h2>
            <p class="mt-5 text-base leading-relaxed text-stone-600 sm:text-lg">
                Terhubung dengan RESONA SAINTEK — dapatkan riset, tips kesehatan, dan konten edukatif dari campaign Riset Tepat, Masyarakat Sehat, langsung di medsos & media online kami.
            </p>
        </div>

        <div class="mt-14 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <a href="{{ route('links.show', 'social') }}" class="group relative overflow-hidden rounded-3xl border border-stone-200 bg-white p-10 shadow-soft text-center transition hover:border-primary-400 hover:shadow-hover">
                <div class="text-6xl mb-4">📱</div>
                <h3 class="text-2xl font-bold text-stone-900 group-hover:text-primary-700 transition">Media Sosial</h3>
                <p class="mt-2 text-stone-600">Jelajahi update terbaru dari media sosial resmi</p>
            </a>
            <a href="{{ route('links.show', 'media') }}" class="group relative overflow-hidden rounded-3xl border border-stone-200 bg-white p-10 shadow-soft text-center transition hover:border-primary-400 hover:shadow-hover">
                <div class="text-6xl mb-4">🌐</div>
                <h3 class="text-2xl font-bold text-stone-900 group-hover:text-primary-700 transition">Media Online</h3>
                <p class="mt-2 text-stone-600">Temukan liputan media online dan berita terkait</p>
            </a>
        </div>
    </div>
</section>

<!-- 6. BERITA TERKINI (BLOG UNISA) -->
<section id="berita" class="py-20 bg-surface-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-900 mb-10 text-center">Berita Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($latestNews as $news)
            <a href="{{ $news->news_url }}" target="_blank" class="group relative bg-white p-8 rounded-3xl border border-stone-200 shadow-soft transition-all duration-300 hover:shadow-hover hover:-translate-y-1 hover:border-primary-400">
                <div class="absolute top-0 left-0 h-1.5 w-full {{ $loop->iteration % 2 == 0 ? 'bg-accent-400' : 'bg-primary-500' }} rounded-t-3xl"></div>
                <div class="flex flex-col h-full">
                    <span class="text-xs font-bold uppercase tracking-wider {{ $loop->iteration % 2 == 0 ? 'text-accent-600' : 'text-primary-600' }} mb-3">
                        {{ $loop->iteration % 2 == 0 ? 'Inovasi & Kesehatan' : 'Riset & Publikasi' }}
                    </span>
                    <h3 class="text-xl font-bold text-stone-900 leading-snug group-hover:text-primary-700 transition">{{ $news->title }}</h3>
                    <div class="mt-4 text-stone-600 text-sm leading-relaxed line-clamp-3">
                        {{ $news->description ?? 'Klik untuk membaca selengkapnya mengenai berita ini di situs resmi UNISA Yogyakarta.' }}
                    </div>
                    <div class="mt-auto pt-6 flex items-center justify-between">
                        <span class="text-xs text-stone-400">{{ $news->published_at ? $news->published_at->format('d M Y') : 'Update Terbaru' }}</span>
                        <span class="text-primary-600 font-bold text-sm inline-flex items-center group-hover:translate-x-1 transition-transform">
                            Baca Selengkapnya
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full py-12 text-center">
                <p class="text-stone-500 italic">Belum ada berita yang ditambahkan.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('news.all') }}" class="btn-primary !rounded-2xl !px-10 !py-4 shadow-xl">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Hero carousel auto-rotate
    (function(){
        const slides = document.querySelectorAll('#carousel .carousel-slide');
        if (slides.length <= 1) return;
        let idx = 0;
        const go = (n) => {
            slides[idx].classList.remove('active');
            idx = (n + slides.length) % slides.length;
            slides[idx].classList.add('active');
        };
        const prev = document.getElementById('carousel-prev');
        const next = document.getElementById('carousel-next');
        if (prev) prev.addEventListener('click', () => go(idx - 1));
        if (next) next.addEventListener('click', () => go(idx + 1));
        setInterval(() => go(idx + 1), 6000);
    })();
</script>
@endpush
