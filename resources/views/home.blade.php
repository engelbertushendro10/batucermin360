<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Batu Cermin Cave | Virtual Tour &amp; Discovery</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Pannellum 360 Viewer -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0da6f2",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101c22",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-100 transition-colors duration-300">
    <!-- Navigation -->
    <nav
        class="fixed top-0 left-0 right-0 z-50 bg-white/10 dark:bg-background-dark/10 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 md:w-10 md:h-10 bg-primary rounded-lg flex items-center justify-center">
                    <span class="material-icons text-white text-base md:text-xl">terrain</span>
                </div>
                <span class="text-lg md:text-xl font-bold tracking-tight text-white uppercase">Batu
                    Cermin</span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors" href="#">Explore</a>
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors"
                    href="virtual-tour.html">Virtual
                    Tour</a>
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors"
                    href="ticket.html">Tickets</a>
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors" href="#">About</a>
            </div>
            <div class="flex items-center gap-2 md:gap-4">
                <button
                    class="bg-primary hover:bg-primary/90 text-white px-4 md:px-6 py-2 md:py-2.5 rounded-full font-bold text-xs md:text-sm transition-all shadow-lg shadow-primary/20">
                    Book Now
                </button>
                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="md:hidden text-white p-2">
                    <span class="material-icons">menu</span>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu"
            class="hidden fixed inset-0 z-[60] bg-background-dark/95 backdrop-blur-xl flex flex-col items-center justify-center gap-8 transition-all duration-300">
            <button id="mobile-menu-close" class="absolute top-6 right-6 text-white text-3xl">
                <span class="material-icons">close</span>
            </button>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="#">Explore</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors"
                href="virtual-tour.html">Virtual Tour</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="ticket.html">Tickets</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="#">About</a>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="relative h-[90vh] min-h-[700px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div id="hero-panorama" class="w-full h-full bg-slate-900"></div>
            <div
                class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/20 to-background-light dark:to-background-dark">
            </div>
        </div>
        <div class="relative z-10 text-center px-6 md:px-12 max-w-5xl mx-auto">
            <span
                class="inline-block px-3 py-1 md:px-4 md:py-1.5 bg-white/20 backdrop-blur-md border border-white/30 rounded-full text-white text-[10px] md:text-xs font-bold tracking-widest uppercase mb-4 md:mb-6">
                Labuan Bajo's Hidden Wonder
            </span>
            <h1
                class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-black text-white mb-4 md:mb-8 leading-[1.1] tracking-tight">
                Discover the <span class="text-primary italic">Mirror Stone</span> Cave
            </h1>
            <p
                class="text-base md:text-xl lg:text-2xl text-white/90 mb-8 md:mb-12 max-w-3xl mx-auto font-light leading-relaxed">
                Experience the magic of sunlight dancing on ancient limestone walls. A subterranean cathedral sculpted
                by nature over millions of years.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button
                    class="bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-xl font-bold text-lg flex items-center gap-2 group transition-all">
                    Start Your Adventure
                    <span class="material-icons group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
                <button
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all">
                    Watch Teaser
                </button>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <span class="material-icons text-white text-3xl">expand_more</span>
        </div>
    </header>
    <!-- Virtual Tour Section -->
    <section class="py-16 md:py-24 lg:py-32 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <div class="lg:w-1/2 space-y-6 md:space-y-8">
                    <h2
                        class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 dark:text-white leading-tight">
                        360° Virtual <br class="hidden md:block" /> <span class="text-primary italic">Experience</span>
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                        Step inside the "Mirror Stone" before you even arrive. Our immersive 360-degree virtual tour
                        allows you to navigate through the shimmering chambers and narrow passageways of Batu Cermin
                        from the comfort of your screen.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>Interactive point-and-click navigation</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>High-definition panoramic views</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>Educational info-spots throughout</span>
                        </li>
                    </ul>
                    <button class="mt-4 text-primary font-bold flex items-center gap-2 hover:underline">
                        Learn about the virtual technology
                        <span class="material-icons text-sm">open_in_new</span>
                    </button>
                </div>
                <div class="lg:w-1/2 w-full">
                    <div
                        class="relative group aspect-video rounded-2xl overflow-hidden shadow-2xl shadow-primary/10 bg-slate-200 dark:bg-slate-800 border-4 border-white dark:border-slate-800">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Interior of a dark cave with stalactites"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnA4edCee2KGTtcSNFJWyBOjagiQMHzfMUgGBeWnIWAZSyTLB3KJdFEEBigOkYeEOUC76o-Up523u9J0ReDUobFEF9kugWh10xnunWt1myhRkkUHydohuqpCYJnsZfmq8IBOAQWzI4WhuOwDJxqNZ1KomZ01N2D5KqX0O5VYBAbfu_MfA_cI6FcGIq7sQpX4fr7XjMPYgs0Lx9O_nIzZLaa1Fi1Ki_juWweU4nV2VWRaN5fGY9MUkZbO2jH0uSUN3qqqrLA3fDN2A" />
                        <div
                            class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                            <div
                                class="w-24 h-24 bg-primary/90 text-white rounded-full flex items-center justify-center shadow-2xl transform transition-transform group-hover:scale-110 cursor-pointer">
                                <span class="material-icons text-5xl translate-x-1">play_arrow</span>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-6 left-6 right-6 p-4 bg-black/40 backdrop-blur-md rounded-xl border border-white/20">
                            <div class="flex items-center justify-between text-white">
                                <span class="text-sm font-bold uppercase tracking-widest">Main Chamber Preview</span>
                                <span class="flex items-center gap-1 text-xs">
                                    <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                                    LIVE INTERACTIVE
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 360 Discovery Gallery -->
    <section class="py-16 md:py-24 lg:py-32 bg-white dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2
                        class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-4 md:mb-6 leading-tight">
                        360° Discovery <span class="text-primary italic">Gallery</span>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400">
                        Dive into the most stunning chambers of Batu Cermin. Click an album to explore the immersive
                        360° environment.
                    </p>
                </div>
                <button onclick="window.location.href='virtual-tour.html'"
                    class="px-6 py-3 border-2 border-primary text-primary font-bold rounded-xl hover:bg-primary hover:text-white transition-all">
                    Open Full Tour
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Album 1 -->
                <div onclick="openGalleryModal('360/69.jpg', 'Hidden Mirror Chamber')"
                    class="group relative aspect-[4/5] rounded-3xl overflow-hidden cursor-pointer shadow-xl hover:shadow-primary/20 transition-all">
                    <img src="360/69.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="bg-primary/90 text-white text-[10px] font-bold px-2 py-1 rounded uppercase mb-2 inline-block">Iconic
                            View</span>
                        <h3 class="text-xl font-bold text-white">Mirror Chamber</h3>
                    </div>
                </div>
                <!-- Album 2 -->
                <div onclick="openGalleryModal('360/10.jpg', 'Limestone Cathedral')"
                    class="group relative aspect-[4/5] rounded-3xl overflow-hidden cursor-pointer shadow-xl hover:shadow-primary/20 transition-all">
                    <img src="360/10.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="bg-white/20 text-white text-[10px] font-bold px-2 py-1 rounded uppercase mb-2 inline-block">Architecture</span>
                        <h3 class="text-xl font-bold text-white">The Cathedral</h3>
                    </div>
                </div>
                <!-- Album 3 -->
                <div onclick="openGalleryModal('360/20.jpg', 'Subterranean Maze')"
                    class="group relative aspect-[4/5] rounded-3xl overflow-hidden cursor-pointer shadow-xl hover:shadow-primary/20 transition-all">
                    <img src="360/20.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="bg-white/20 text-white text-[10px] font-bold px-2 py-1 rounded uppercase mb-2 inline-block">Exploration</span>
                        <h3 class="text-xl font-bold text-white">The Maze</h3>
                    </div>
                </div>
                <!-- Album 4 -->
                <div onclick="openGalleryModal('360/50.jpg', 'Ancient Fossil Path')"
                    class="group relative aspect-[4/5] rounded-3xl overflow-hidden cursor-pointer shadow-xl hover:shadow-primary/20 transition-all">
                    <img src="360/50.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="bg-white/20 text-white text-[10px] font-bold px-2 py-1 rounded uppercase mb-2 inline-block">History</span>
                        <h3 class="text-xl font-bold text-white">Fossil Path</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 360 Viewer Modal -->
    <div id="galleryModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 md:p-12">
        <div class="absolute inset-0 bg-black/95 backdrop-blur-sm" onclick="closeGalleryModal()"></div>
        <div
            class="relative w-full h-full bg-slate-900 rounded-3xl overflow-hidden shadow-2xl border border-white/10 flex flex-col">
            <div class="p-6 flex justify-between items-center border-b border-white/10 z-10 bg-slate-900">
                <div class="flex items-center gap-3">
                    <span class="material-icons text-primary">360</span>
                    <h2 id="modalTitle" class="text-white font-bold text-xl uppercase tracking-tight">360 Experience
                    </h2>
                </div>
                <button onclick="closeGalleryModal()"
                    class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-all">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div id="modal-viewer" class="flex-grow"></div>
            <div
                class="absolute bottom-8 left-1/2 -translate-x-1/2 px-6 py-2 bg-black/40 backdrop-blur-md rounded-full border border-white/20 text-white text-xs font-bold uppercase tracking-widest pointer-events-none">
                Drag to explore • Scroll to zoom
            </div>
        </div>
    </div>

    <!-- Tour Packages -->
    <section class="py-16 md:py-24 lg:py-32 bg-primary/5 dark:bg-primary/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12 md:mb-20">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-4 md:mb-6">
                    Choose Your Adventure</h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Explore Batu Cermin with our curated
                    tour packages designed for every level of explorer.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($acaras as $acara)
                <!-- Card -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-2xl transition-all hover:-translate-y-2 @if($loop->iteration == 2) border-2 border-primary shadow-xl shadow-primary/10 relative transform scale-105 z-10 @endif">
                    <div class="h-48 overflow-hidden relative">
                        @if($acara->banner)
                            <img class="w-full h-full object-cover" 
                                 src="{{ asset('storage/' . $acara->banner) }}" 
                                 alt="{{ $acara->judul }}" />
                        @else
                            <div class="w-full h-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center">
                                <span class="material-icons text-slate-400 text-5xl">image</span>
                            </div>
                        @endif
                        
                        @if($loop->iteration == 2)
                        <div
                            class="absolute top-0 inset-x-0 bg-primary text-white text-[10px] font-bold py-1 text-center uppercase tracking-widest">
                            Most Popular</div>
                        @elseif($loop->iteration == 1)
                        <div
                            class="absolute top-4 right-4 bg-white/90 dark:bg-slate-800/90 px-3 py-1 rounded-full text-xs font-bold text-primary uppercase">
                            Best Value</div>
                        @endif
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-extrabold mb-2">{{ $acara->judul }}</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            {{ Str::limit($acara->deskripsi, 100) }}
                        </p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-icons text-primary text-lg">calendar_month</span>
                                <span>{{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('d M Y H:i') }}</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-icons text-primary text-lg">payments</span>
                                <span>Rp {{ number_format($acara->harga_lokal, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-icons text-primary text-lg">groups</span>
                                <span>Sisa Kuota: {{ $acara->kuota }}</span>
                            </div>
                        </div>

                        @if($acara->kuota > 0)
                            <button onclick="openBookingModal('{{ $acara->id }}', '{{ $acara->judul }}', '{{ $acara->harga_lokal }}', '{{ $acara->harga_mancanegara }}', '{{ $acara->kuota }}')"
                                class="w-full py-4 @if($loop->iteration == 2) bg-primary text-white hover:bg-primary/90 @else border-2 border-primary text-primary hover:bg-primary hover:text-white @endif rounded-xl font-bold transition-all">
                                Beli Tiket
                            </button>
                        @else
                            <button disabled
                                class="w-full py-4 bg-slate-200 dark:bg-slate-800 text-slate-500 rounded-xl font-bold cursor-not-allowed">
                                Kuota Habis
                            </button>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Map/Location Shortcut -->
    <section class="py-24 px-6 bg-white dark:bg-background-dark">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 items-center">
            <div
                class="md:w-1/2 rounded-2xl overflow-hidden h-[400px] w-full border border-slate-200 dark:border-slate-800">
                <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center relative">
                    <img class="w-full h-full object-cover opacity-60 grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Satellite view map of Labuan Bajo area" data-location="Labuan Bajo"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYxOAt-7p9I5X_6-bgLYK8lHtkCNVJys5LGUiUsruYqKIR_7RjesfyRmFbb-HgUhZOOvvQPKQF4-BtgJeGHkoDosFfbcozZy6j2FsDzgcv_aRKUnbHE8c18I0uCBtNYMgeMSTFGtRzzhf4Ly1MSrB_BrGzNubGNIOw3ci1fxpYZypjAMDZCS0hhwqPgsCVCMRYOvy5mWuPX0RtTqHs06lLgcU4AliAbQ_Rn5AxRkk8oju-aEbq5KhggR-b9ZM8c1wMnZA6_L3ttxs" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex flex-col items-center">
                            <span class="material-icons text-primary text-5xl">location_on</span>
                            <div
                                class="bg-white dark:bg-slate-900 px-4 py-2 rounded-lg shadow-xl mt-2 font-bold text-sm">
                                Batu Cermin Cave
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl font-extrabold">Easy to Reach</h2>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Located only 15 minutes from Komodo
                    International Airport and Labuan Bajo downtown. Perfect for a quick half-day trip or as part of your
                    island-hopping itinerary.</p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <span class="text-primary font-bold block mb-1">Open Hours</span>
                        <p class="text-sm">Daily, 09:00 AM - 05:00 PM</p>
                    </div>
                    <div>
                        <span class="text-primary font-bold block mb-1">Entry Tip</span>
                        <p class="text-sm">Visit at 10:00 AM for sunbeams</p>
                    </div>
                </div>
                <button class="flex items-center gap-2 text-primary font-bold group">
                    Get Directions on Google Maps
                    <span class="material-icons group-hover:translate-x-1 transition-transform">map</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-slate-800 pb-16 mb-10">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
                        <span class="material-icons text-white text-sm">terrain</span>
                    </div>
                    <span class="text-lg font-bold tracking-tight text-white uppercase">Batu Cermin</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Protecting and sharing the natural wonders of Labuan Bajo. Join us for an unforgettable subterranean
                    journey.
                </p>
                <div class="flex gap-4 mt-8">
                    <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all"
                        href="#">
                        <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                            </path>
                        </svg>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all"
                        href="#">
                        <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Explore</h4>
                <ul class="space-y-4 text-sm">
                    <li><a class="hover:text-primary transition-colors" href="#">How to Get There</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Nature &amp; Wildlife</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Photo Gallery</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Visitor Rules</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Booking</h4>
                <ul class="space-y-4 text-sm">
                    <li><a class="hover:text-primary transition-colors" href="#">Buy Tickets</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Group Packages</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">360 Virtual Tour</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Refund Policy</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Contact Us</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-primary text-sm">phone</span>
                        <span>+62 812-3456-7890</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-primary text-sm">email</span>
                        <span>hello@batucermin.com</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-primary text-sm">location_on</span>
                        <span>Labuan Bajo, Flores, <br />East Nusa Tenggara, ID</span>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
            <p>© 2024 Batu Cermin Cave Tourism. All rights reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a class="hover:text-slate-300" href="#">Privacy Policy</a>
                <a class="hover:text-slate-300" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
    <!-- Booking Modal -->
    <div id="bookingModal" class="fixed inset-0 z-[110] hidden flex items-end sm:items-center justify-center p-0 sm:p-4 transition-all duration-300">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeBookingModal()"></div>
        <div class="relative w-full max-w-2xl bg-white dark:bg-slate-900 rounded-t-[2.5rem] sm:rounded-3xl overflow-hidden shadow-2xl transition-all scale-95 opacity-0 duration-300 max-h-[90vh] flex flex-col" id="modalContainer">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center bg-white dark:bg-slate-900 sticky top-0 z-10">
                <div>
                    <h2 class="text-xl font-bold" id="bookingTitle">Beli Tiket</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400" id="bookingPriceDisplay"></p>
                </div>
                <button onclick="closeBookingModal()" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                    <span class="material-icons text-sm">close</span>
                </button>
            </div>
            <form id="bookingForm" action="" method="POST" class="p-6 space-y-6 overflow-y-auto">
                @csrf
                <div class="space-y-4">
                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Nama Lengkap</label>
                        <input type="text" name="nama_pembeli" required placeholder="Masukkan nama sesuai identitas" 
                            class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-800 border-none rounded-2xl focus:ring-2 focus:ring-primary text-sm font-medium"
                            value="{{ auth()->check() ? auth()->user()->name : '' }}">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Email</label>
                            <input type="email" name="email_pembeli" required placeholder="email@contoh.com" 
                                class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-800 border-none rounded-2xl focus:ring-2 focus:ring-primary text-sm font-medium"
                                value="{{ auth()->check() ? auth()->user()->email : '' }}">
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500">WhatsApp / HP</label>
                            <input type="tel" name="no_hp_pembeli" required placeholder="0812..." 
                                class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-800 border-none rounded-2xl focus:ring-2 focus:ring-primary text-sm font-medium">
                        </div>
                    </div>
                </div>

                <div class="p-5 bg-primary/5 rounded-3xl border border-primary/10 space-y-6">
                    <div class="space-y-3">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Kategori Wisatawan</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="jenis_tamu" value="lokal" checked class="peer sr-only" onchange="calculateTotal()">
                            <div class="p-3 border-2 border-slate-100 dark:border-slate-800 rounded-xl peer-checked:border-primary peer-checked:bg-primary/5 transition-all text-center">
                                <span class="text-sm font-bold block">Lokal</span>
                                <span class="text-[10px] text-slate-500 block">IDR 20.000</span>
                            </div>
                        </label>
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="jenis_tamu" value="mancanegara" class="peer sr-only" onchange="calculateTotal()">
                            <div class="p-3 border-2 border-slate-100 dark:border-slate-800 rounded-xl peer-checked:border-primary peer-checked:bg-primary/5 transition-all text-center">
                                <span class="text-sm font-bold block">Mancanegara</span>
                                <span class="text-[10px] text-slate-500 block" id="mancanegaraPriceDisplay">IDR 0</span>
                            </div>
                        </label>
                    </div>
                </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Jumlah Tiket</label>
                            <div class="flex items-center gap-3">
                                <button type="button" onclick="updateQty(-1)" class="w-12 h-12 bg-white dark:bg-slate-700 rounded-xl shadow-sm flex items-center justify-center hover:bg-slate-100 transition-colors">-</button>
                                <input type="number" name="jumlah_tiket" id="jumlah_tiket" value="1" min="1" readonly
                                    class="w-12 text-center bg-transparent border-none font-black text-xl">
                                <button type="button" onclick="updateQty(1)" class="w-12 h-12 bg-white dark:bg-slate-700 rounded-xl shadow-sm flex items-center justify-center hover:bg-slate-100 transition-colors">+</button>
                            </div>
                        </div>
                        <div class="space-y-1 text-right">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Total Bayar</label>
                            <div class="text-2xl font-black text-primary" id="totalDisplay">Rp 0</div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Metode Pembayaran</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="metode_pembayaran" value="online" checked class="peer sr-only">
                            <div class="p-3 border-2 border-slate-100 dark:border-slate-800 rounded-xl peer-checked:border-primary peer-checked:bg-primary/5 transition-all text-center">
                                <span class="material-icons text-lg block mb-1">payments</span>
                                <span class="text-[10px] font-bold uppercase">Online (QRIS/Bank)</span>
                            </div>
                        </label>
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="metode_pembayaran" value="lokasi" class="peer sr-only">
                            <div class="p-3 border-2 border-slate-100 dark:border-slate-800 rounded-xl peer-checked:border-primary peer-checked:bg-primary/5 transition-all text-center">
                                <span class="material-icons text-lg block mb-1">store</span>
                                <span class="text-[10px] font-bold uppercase">Bayar di Tempat</span>
                            </div>
                        </label>
                    </div>
                </div>
                <button type="submit" class="w-full py-4 bg-primary text-white rounded-2xl font-black shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                    KONFIRMASI PEMESANAN
                </button>
            </form>
        </div>
    </div>

    <!-- Toast Notification (Simplified) -->
    @if(session('success'))
    <div id="toast" class="fixed bottom-10 right-10 z-[200] bg-emerald-500 text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3 animate-bounce">
        <span class="material-icons">check_circle</span>
        <span class="font-bold">{{ session('success') }}</span>
    </div>
    <script>setTimeout(() => document.getElementById('toast').remove(), 5000);</script>
    @endif

    <script>
        const viewer = pannellum.viewer('hero-panorama', {
            "type": "equirectangular",
            "panorama": "360/69.jpg",
            "autoLoad": true,
            "showControls": false,
            "yaw": 180,
            "pitch": 5,
            "hfov": 100,
            "minPitch": 0,
            "maxPitch": 85,
            "mouseZoom": false,
            "doubleClickZoom": false,
            "autoRotate": -5, // Start moving immediately
            "autoRotateInactivityDelay": 0
        });

        let totalYawMoved = 0;
        let lastYaw = 180;
        let stage = 'horizontal';

        function checkProgress() {
            const currentYaw = viewer.getYaw();
            if (isNaN(currentYaw)) {
                requestAnimationFrame(checkProgress);
                return;
            }

            let diff = currentYaw - lastYaw;
            if (diff > 180) diff -= 360;
            if (diff < -180) diff += 360;

            totalYawMoved += Math.abs(diff);
            lastYaw = currentYaw;

            if (stage === 'horizontal' && totalYawMoved >= 360) {
                stage = 'vertical';
                viewer.stopAutoRotate();
            }

            if (stage === 'vertical') {
                const currentPitch = viewer.getPitch();
                if (currentPitch < 45) {
                    viewer.setPitch(currentPitch + 0.2);
                }
            }

            requestAnimationFrame(checkProgress);
        }

        viewer.on('load', () => {
            lastYaw = viewer.getYaw();
            requestAnimationFrame(checkProgress);
        });

        // Safety fallback if 'load' event is missed
        setTimeout(() => {
            if (totalYawMoved === 0) {
                lastYaw = viewer.getYaw();
                requestAnimationFrame(checkProgress);
            }
        }, 3000);

        // Gallery Modal Logic
        let galleryViewer = null;

        function openGalleryModal(imagePath, title) {
            const modal = document.getElementById('galleryModal');
            const modalTitle = document.getElementById('modalTitle');
            const viewerContainer = document.getElementById('modal-viewer');

            modalTitle.innerText = title;
            modal.classList.remove('hidden');

            // Wait for modal to be visible before initializing Pannellum
            setTimeout(() => {
                if (galleryViewer) {
                    galleryViewer.destroy();
                }
                galleryViewer = pannellum.viewer('modal-viewer', {
                    "type": "equirectangular",
                    "panorama": imagePath,
                    "autoLoad": true,
                    "autoRotate": -2,
                    "showControls": true
                });
            }, 100);
        }

        function closeGalleryModal() {
            const modal = document.getElementById('galleryModal');
            modal.classList.add('hidden');
            if (galleryViewer) {
                galleryViewer.destroy();
                galleryViewer = null;
            }
        }

        // Mobile Interactions
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle?.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        mobileMenuClose?.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Close mobile panels when clicking on navigation links
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });

        // Booking Modal Logic
        let hargaLokal = 0;
        let hargaMancanegara = 0;
        let maxKuota = 0;

        function openBookingModal(id, title, priceLokal, priceMancanegara, kuota) {
            hargaLokal = priceLokal;
            hargaMancanegara = priceMancanegara;
            maxKuota = kuota;
            
            document.getElementById('bookingTitle').innerText = title;
            document.getElementById('mancanegaraPriceDisplay').innerText = 'IDR ' + new Intl.NumberFormat('id-ID').format(priceMancanegara);
            document.getElementById('bookingPriceDisplay').innerText = 'Batu Cermin Cave Expedition';
            document.getElementById('bookingForm').action = '/beli/' + id;
            document.getElementById('jumlah_tiket').value = 1;
            
            // Set default category to lokal
            document.querySelector('input[name="jenis_tamu"][value="lokal"]').checked = true;
            
            calculateTotal();

            const modal = document.getElementById('bookingModal');
            const container = document.getElementById('modalContainer');
            modal.classList.remove('hidden');
            setTimeout(() => {
                container.classList.remove('scale-95', 'opacity-0');
            }, 10);
        }

        function closeBookingModal() {
            const modal = document.getElementById('bookingModal');
            const container = document.getElementById('modalContainer');
            container.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        function updateQty(delta) {
            const input = document.getElementById('jumlah_tiket');
            let val = parseInt(input.value) + delta;
            if (val < 1) val = 1;
            if (val > maxKuota) val = maxKuota;
            input.value = val;
            calculateTotal();
        }

        function calculateTotal() {
            const qty = document.getElementById('jumlah_tiket').value;
            const jenisTamu = document.querySelector('input[name="jenis_tamu"]:checked').value;
            const activePrice = (jenisTamu === 'lokal') ? hargaLokal : hargaMancanegara;
            
            const total = qty * activePrice;
            document.getElementById('totalDisplay').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
        }
    </script>
</body>

</html>