<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'RESONA — Riset Tepat, Masyarakat Sehat')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#effbf0',
                            100: '#d8f5db',
                            200: '#b3ebb9',
                            300: '#7fd98a',
                            400: '#49c15a',
                            500: '#21a537',
                            600: '#148629',
                            700: '#0f6b22',
                            800: '#0e551e',
                            900: '#0c4619',
                            950: '#003b14',
                        },
                        accent: {
                            50:  '#fffbea',
                            100: '#fff3c4',
                            200: '#ffe999',
                            300: '#ffdb66',
                            400: '#ffc93a',
                            500: '#ffb01f',
                            600: '#e28a0d',
                            700: '#bb620c',
                        },
                        surface: {
                            50: '#fbf9f3',
                            100: '#f5f2e8',
                            200: '#ebe5d3',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'sans-serif'],
                        display: ['Poppins', 'Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 4px 20px -2px rgba(0,0,0,0.06), 0 2px 8px -2px rgba(0,0,0,0.04)',
                        hover: '0 10px 30px -8px rgba(20,134,41,0.32)',
                    },
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background-color: #fafaf9;
            color: #1c1917;
        }
        .font-display { font-family: 'Poppins', 'Inter', sans-serif; }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s ease;
            will-change: opacity, transform;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-fade-in {
            animation: heroFade 1.3s ease both;
        }
        .hero-fade-in-delay-1 { animation-delay: .25s; }
        .hero-fade-in-delay-2 { animation-delay: .5s; }
        .hero-fade-in-delay-3 { animation-delay: .75s; }
        @keyframes heroFade {
            0% { opacity: 0; transform: translateY(20px) scale(.98); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        .carousel-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        .carousel-slide.active { opacity: 1; }

        .card-hover {
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px -12px rgba(20,134,41,0.28);
            border-color: rgba(73,193,90,.5);
        }

        .btn-primary {
            display: inline-flex; align-items: center; gap: .5rem;
            border-radius: .75rem; background-color: #148629; color: #fff;
            padding: .625rem 1.25rem; font-weight: 600;
            box-shadow: 0 4px 20px -2px rgba(0,0,0,0.06), 0 2px 8px -2px rgba(0,0,0,0.04);
            transition: all .2s ease;
        }
        .btn-primary:hover { background-color: #0f6b22; box-shadow: 0 10px 30px -8px rgba(20,134,41,0.32); }
        .btn-primary:active { transform: scale(.95); }

        .btn-accent {
            display: inline-flex; align-items: center; gap: .5rem;
            border-radius: .75rem; background-color: #ffc93a; color: #0c4619;
            padding: .625rem 1.25rem; font-weight: 600;
            box-shadow: 0 4px 20px -2px rgba(0,0,0,0.06), 0 2px 8px -2px rgba(0,0,0,0.04);
            transition: all .2s ease;
        }
        .btn-accent:hover { background-color: #ffb01f; box-shadow: 0 10px 30px -8px rgba(20,134,41,0.32); }
        .btn-accent:active { transform: scale(.95); }

        .btn-ghost {
            display: inline-flex; align-items: center; gap: .5rem;
            border-radius: .75rem; border: 1px solid #b3ebb9; background-color: #fff; color: #0f6b22;
            padding: .625rem 1.25rem; font-weight: 600;
            box-shadow: 0 1px 2px 0 rgba(0,0,0,0.04);
            transition: all .2s ease;
        }
        .btn-ghost:hover { border-color: #49c15a; background-color: #effbf0; }
        .btn-ghost:active { transform: scale(.95); }

        .nav-link {
            position: relative; font-weight: 500; color: #44403c;
            transition: color .2s ease;
        }
        .nav-link:hover { color: #0f6b22; }
        .nav-link::after {
            content: '';
            position: absolute; bottom: -4px; left: 0;
            height: 2px; width: 0; border-radius: 999px;
            background-color: #21a537; transition: all .3s ease;
        }
        .nav-link:hover::after { width: 100%; }

        .chip-icon {
            display: flex; align-items: center; justify-content: center;
            flex: none; width: 3rem; height: 3rem; border-radius: 1rem;
            background-image: linear-gradient(to bottom right, #d8f5db, #ffe999);
            font-size: 1.5rem; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.04);
        }

        .soc-icon {
            display: flex; align-items: center; justify-content: center;
            flex: none; width: 3.5rem; height: 3.5rem; border-radius: 1rem;
            background-color: #fff; font-size: 1.875rem;
            box-shadow: 0 4px 20px -2px rgba(0,0,0,0.06), 0 2px 8px -2px rgba(0,0,0,0.04);
            box-shadow: 0 0 0 1px #e7e5e4;
            transition: transform .3s ease;
        }
        .group:hover .soc-icon { transform: scale(1.05); }

        /* scrollbar subtle */
        ::-webkit-scrollbar { width: 10px; height: 10px; }
        ::-webkit-scrollbar-track { background: #fafaf9; }
        ::-webkit-scrollbar-thumb { background: #d6d3d1; border-radius: 999px; }
        ::-webkit-scrollbar-thumb:hover { background: #a8a29e; }
    </style>

    @stack('head')
</head>
<body class="antialiased">

    @unless(request()->is('admin*'))
    <!-- NAVBAR -->
    <header id="navbar" class="absolute top-0 z-50 w-full border-b border-white/20 bg-transparent text-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('Resona Saintek Ornament2.png') }}" alt="Logo Resona" class="h-10 w-auto brightness-0 invert">
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#beranda" class="text-white hover:text-accent-300 transition">Beranda</a>
                <a href="#tentang" class="text-white hover:text-accent-300 transition">Tentang Kami</a>
                <a href="#mengapa" class="text-white hover:text-accent-300 transition">Mengapa RESONA SAINTEK</a>
                <a href="#inovasi" class="text-white hover:text-accent-300 transition">Inovasi</a>
                <a href="#medsos" class="text-white hover:text-accent-300 transition">Media Sosial</a>
            </nav>

            <button id="mobile-menu-btn" class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-stone-200 bg-white text-stone-700 shadow-sm md:hidden" aria-label="Menu">
                <svg id="icon-open" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="icon-close" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden border-t border-stone-200/70 bg-surface-50 md:hidden">
            <div class="space-y-1 px-4 py-3 sm:px-6">
                <a href="#beranda" class="mobile-link block rounded-lg px-3 py-2 font-medium text-stone-700 hover:bg-primary-50 hover:text-primary-700">Beranda</a>
                <a href="#tentang" class="mobile-link block rounded-lg px-3 py-2 font-medium text-stone-700 hover:bg-primary-50 hover:text-primary-700">Tentang Kami</a>
                <a href="#mengapa" class="mobile-link block rounded-lg px-3 py-2 font-medium text-stone-700 hover:bg-primary-50 hover:text-primary-700">Mengapa RESONA SAINTEK</a>
                <a href="#inovasi" class="mobile-link block rounded-lg px-3 py-2 font-medium text-stone-700 hover:bg-primary-50 hover:text-primary-700">Inovasi</a>
                <a href="#medsos" class="mobile-link block rounded-lg px-3 py-2 font-medium text-stone-700 hover:bg-primary-50 hover:text-primary-700">Media Sosial</a>
                <a href="{{ route('admin.social-links.index') }}" class="mt-2 btn-ghost w-full justify-center">Admin / Login</a>
            </div>
        </div>
    </header>
    @endunless

    <!-- SESSION FLASH -->
    @if(session()->has('success'))
    <div class="fixed right-4 top-20 z-[60] max-w-sm rounded-xl border border-primary-200 bg-white px-4 py-3 shadow-soft animate-[heroFade_.5s_ease_both]">
        <div class="flex items-center gap-3">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary-100 text-primary-700">✓</span>
            <p class="text-sm font-medium text-stone-800">{{ session('success') }}</p>
        </div>
    </div>
    @endif
    @if($errors->any())
    <div class="fixed right-4 top-20 z-[60] max-w-sm rounded-xl border border-red-200 bg-red-50 px-4 py-3 shadow-soft animate-[heroFade_.5s_ease_both]">
        <div class="flex items-start gap-3">
            <span class="flex h-8 w-8 flex-none items-center justify-center rounded-full bg-red-100 text-red-700">!</span>
            <ul class="list-disc pl-1 text-sm text-red-800">
                @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    @unless(request()->is('admin*'))
    <footer class="mt-16 bg-primary-900 text-white">
        <!-- Decorative Top Border -->
        <div class="h-1 w-full bg-gradient-to-r from-accent-400 to-primary-400"></div>
        
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 md:grid-cols-3 lg:gap-16">
                <!-- Brand Section -->
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('Resona Saintek Ornament2.png') }}" alt="Logo Resona" class="h-12 w-auto">
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-white/70">Riset Tepat, Masyarakat Sehat.<br>Platform informasi riset UNISA Yogyakarta untuk Indonesia.</p>
                </div>

                <!-- Nav Section -->
                <div>
                    <h4 class="font-display text-sm font-bold uppercase tracking-widest text-accent-400">Navigasi</h4>
                    <ul class="mt-6 space-y-3 text-sm">
                        <li><a href="{{ route('home') }}#tentang" class="text-white/80 transition hover:text-white hover:translate-x-1 block">Tentang Kami</a></li>
                        <li><a href="{{ route('home') }}#mengapa" class="text-white/80 transition hover:text-white hover:translate-x-1 block">Mengapa RESONA SAINTEK</a></li>
                        <li><a href="{{ route('home') }}#inovasi" class="text-white/80 transition hover:text-white hover:translate-x-1 block">Inovasi</a></li>
                        <li><a href="{{ route('home') }}#medsos" class="text-white/80 transition hover:text-white hover:translate-x-1 block">Media Sosial</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div>
                    <h4 class="font-display text-sm font-bold uppercase tracking-widest text-accent-400">Hubungi Kami</h4>
                    <div class="mt-6 space-y-3 text-sm text-white/80">
                        <p><i class="fas fa-envelope mr-2 text-accent-400"></i> Humas@unisayogya.ac.id</p>
                        <p><i class="fas fa-map-marker-alt mr-2 text-accent-400"></i> Universitas 'Aisyiyah Yogyakarta</p>
                    </div>
                    <div class="mt-8 flex gap-5 items-center">
                        <a href="https://www.facebook.com/UniversitasAisyiyahYogyakarta/" class="text-white/70 hover:text-accent-400 transition text-2xl" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://x.com/unisa_yogya" class="text-white/70 hover:text-accent-400 transition text-2xl" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/unisa_yogya?utm_source=ig_web_button_share_sheet" class="text-white/70 hover:text-accent-400 transition text-2xl" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@unisayogyakarta3139" class="text-white/70 hover:text-accent-400 transition text-2xl" target="_blank"><i class="fab fa-youtube"></i></a>
                        <div class="h-6 w-px bg-white/20 mx-2"></div>
                        <a href="{{ route('admin.social-links.index') }}" class="text-white/70 hover:text-accent-400 transition text-2xl" title="Admin">
                            <i class="fas fa-user-shield"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="mt-12 border-t border-white/10 pt-8 text-center text-xs text-white/50">
                © {{ date('Y') }} RESONA SAINTEK. All rights reserved.
            </div>
        </div>
    </footer>
    @endunless

    <script>
        // Mobile menu toggle
        (function(){
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (!btn || !menu) return;
            const iOpen = document.getElementById('icon-open');
            const iClose = document.getElementById('icon-close');
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iOpen.classList.toggle('hidden');
                iClose.classList.toggle('hidden');
            });
            menu.querySelectorAll('.mobile-link').forEach(l => {
                l.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    iOpen.classList.remove('hidden');
                    iClose.classList.add('hidden');
                });
            });
        })();

        // Scroll reveal (IntersectionObserver)
        (function(){
            const els = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window) || els.length === 0) {
                els.forEach(e => e.classList.add('is-visible'));
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(en => {
                    if (en.isIntersecting) {
                        en.target.classList.add('is-visible');
                        io.unobserve(en.target);
                    }
                });
            }, { threshold: 0.14, rootMargin: '0px 0px -40px 0px' });
            els.forEach(e => io.observe(e));
        })();

        // Auto-dismiss flash messages
        setTimeout(() => {
            document.querySelectorAll('.fixed.z-\\[60\\]').forEach(el => {
                el.style.transition = 'opacity .5s ease, transform .5s ease';
                el.style.opacity = 0;
                setTimeout(() => el.remove(), 500);
            });
        }, 5000);
    </script>

    @stack('scripts')
</body>
</html>
