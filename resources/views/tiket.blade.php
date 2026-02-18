<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Batu Cermin Tickets and Tour Packages</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0da6f2",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101c22",
                        "accent-teal": "#134e4a",
                        "accent-sand": "#fdf8f1"
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
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
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors"
                    href="index.html">Explore</a>
                <a class="text-sm font-semibold text-white/80 hover:text-white transition-colors"
                    href="virtual-tour.html">Virtual Tour</a>
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
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="index.html">Explore</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors"
                href="virtual-tour.html">Virtual Tour</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="ticket.html">Tickets</a>
            <a class="text-2xl font-bold text-white hover:text-primary transition-colors" href="#">About</a>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <!-- Header Section -->
        <div class="mb-10 md:mb-16">
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-accent-teal dark:text-white mb-3 tracking-tight">
                Plan Your <span class="text-primary italic">Adventure</span></h1>
            <p class="text-base md:text-lg text-slate-600 dark:text-slate-400 max-w-3xl">Experience the magical "Mirror
                Stone" cave in Labuan Bajo.
                Select your preferred date and package.</p>
        </div>
        <!-- Availability Header -->
        <div
            class="bg-white dark:bg-slate-900 p-6 md:p-8 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-800 mb-12 md:mb-16 flex flex-wrap items-end gap-6 md:gap-8">
            <div class="flex-1 min-w-[240px]">
                <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Select
                    Date</label>
                <div class="relative">
                    <span
                        class="material-icons-round absolute left-4 top-1/2 -translate-y-1/2 text-primary opacity-60">calendar_today</span>
                    <input
                        class="w-full pl-12 pr-4 py-3.5 bg-accent-sand dark:bg-slate-800 border-none rounded-xl focus:ring-2 focus:ring-primary text-sm font-semibold transition-all"
                        type="date" value="2023-10-25" />
                </div>
            </div>
            <div class="flex-1 min-w-[240px]">
                <label
                    class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Visitors</label>
                <div class="flex items-center bg-accent-sand dark:bg-slate-800 rounded-xl p-1.5 transition-all">
                    <button class="p-2.5 hover:text-primary transition-colors"><span
                            class="material-icons-round">remove</span></button>
                    <div class="flex-1 text-center font-bold text-sm tracking-tight">2 Adults, 0 Children</div>
                    <button class="p-2.5 hover:text-primary transition-colors"><span
                            class="material-icons-round">add</span></button>
                </div>
            </div>
            <div class="flex-none w-full md:w-auto">
                <button
                    class="w-full md:w-auto bg-primary text-white px-10 py-4 rounded-xl font-black text-sm uppercase tracking-widest hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">Check
                    Availability</button>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Package Grid -->
            <div class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Package Card 1 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="relative h-48 overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Stunning limestone formations inside the Batu Cermin cave"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbGSj5ERGSbuFn9DzydDuIxcZ1-7ddfspDzetZOGa0EcPyMpsWI-_zRSOHHzvLCCYsLKU74FqpUVGn3wku2w8FY0pKbxpiNMDnszmtTfGkCDnzW9ECjozRu-g7z1eG2hP2LousMEVz0YvC1OYnwua6tqKRYGmRcSNBed8bMx-RkKeG8oLIb9FaTLno4kZCPi5chMC30dGvspboC9EGKAmgKQK7naR0WZx3qarCERpXkdRy1T-ntcvswUkZP-F1AlasJQWJWBfX0Rg" />
                            <span
                                class="absolute top-3 left-3 bg-accent-teal text-white text-[10px] font-bold uppercase px-2 py-1 rounded">Official
                                Entry</span>
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg leading-tight text-accent-teal dark:text-white">Basic Entry
                                    Ticket</h3>
                                <div class="flex items-center text-amber-500">
                                    <span class="material-icons-round text-sm">star</span>
                                    <span class="text-xs font-bold ml-1 text-slate-600 dark:text-slate-400">4.8</span>
                                </div>
                            </div>
                            <ul class="space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span> Entrance
                                    Fee included</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span> Safety
                                    Helmet Rental</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span> Standard
                                    Insurance</li>
                            </ul>
                            <div
                                class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                <div>
                                    <p class="text-[10px] text-slate-400 uppercase font-bold">Starting from</p>
                                    <p class="text-lg font-extrabold text-primary">IDR 50.000</p>
                                </div>
                                <button
                                    class="bg-primary text-white p-2 rounded-lg hover:bg-primary/90 transition-colors">
                                    <span class="material-icons-round">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Package Card 2 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="relative h-48 overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Tour guide showing limestone rock details in cave"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMpMy7ExOeliuqt0OVNvqbf4_asICgZYIVnkbm_RSgpOZYWtabV9LkEruDvE0D2ydvubWoaIJJSwGqX9-2d2IlQr9HVMIUCTPOt4wpQWruhGfzabF8qniDzT_ozrBK-N9o8-kenf0Xum9M7yyZqQNPAi5WMk6c1ByhEawOpPbymL6SyVA9KOuD7UftxvW9Nk9Lsw3RQ4XvLKt-XlF211S88M0CDULgArcRo3SDDyTwHgsiY5p8Hv2-X2UGEWFDvobktI5PdzGBps0" />
                            <span
                                class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase px-2 py-1 rounded">Best
                                Seller</span>
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg leading-tight text-accent-teal dark:text-white">Guided
                                    Discovery Tour</h3>
                                <div class="flex items-center text-amber-500">
                                    <span class="material-icons-round text-sm">star</span>
                                    <span class="text-xs font-bold ml-1 text-slate-600 dark:text-slate-400">4.9</span>
                                </div>
                            </div>
                            <ul class="space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span> Entrance
                                    Fee &amp; Insurance</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span>
                                    Professional Local Guide</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-icons-round text-primary text-base">check_circle</span>
                                    High-power Flashlight</li>
                            </ul>
                            <div
                                class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                <div>
                                    <p class="text-[10px] text-slate-400 uppercase font-bold">Starting from</p>
                                    <p class="text-lg font-extrabold text-primary">IDR 125.000</p>
                                </div>
                                <button
                                    class="bg-primary text-white p-2 rounded-lg hover:bg-primary/90 transition-colors">
                                    <span class="material-icons-round">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Package Card 3 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border-2 border-primary/50 dark:border-primary/30 hover:shadow-xl transition-shadow group md:col-span-2">
                        <div class="flex flex-col md:flex-row h-full">
                            <div class="relative h-48 md:h-auto md:w-1/3 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="A person wearing a VR headset experiencing virtual cave exploration"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCZSBd5eaTAFDWvFS6q5ZDbgDmip4Oma5dQnGNk6e5FQ7c542KEM8haE9ixHonEDvL7Ny5e0xxMji3QPtjXLscF-dlWMkGjyng_BSFXbjdbkMaiGwSAZ_9sI35N1iwuHyc6DCU3cqJqkheeqyA9YYdRzkf02O4H9azf7NYtCZNOtKQSzrI7fJbcYH3C-A3w6VVoeTjK4rXzu3RdvkB1Bq3_DPBOeV9WngJX3e8je1o7W6jQsfOig18500BedwoF1FmOJYxUB_VsNw" />
                                <div
                                    class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="bg-white/90 text-primary p-3 rounded-full shadow-xl">
                                        <span class="material-icons-round">360</span>
                                    </button>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-amber-500 text-white text-[10px] font-bold uppercase px-2 py-1 rounded">Digital
                                    Explorer</span>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="font-bold text-xl leading-tight text-accent-teal dark:text-white">
                                            Full Digital Experience</h3>
                                        <p class="text-xs text-primary font-bold mt-1">INCLUDES 360° VR CONTENT</p>
                                    </div>
                                    <div class="flex items-center text-amber-500">
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="material-icons-round text-sm">star</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            VIP Entrance (No Queuing)</li>
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            Private Expert Historian Guide</li>
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            Full Safety Gear &amp; Kit</li>
                                    </ul>
                                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            4K VR Tour Download Link</li>
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            Digital Commemorative Photo</li>
                                        <li class="flex items-center gap-2"><span
                                                class="material-icons-round text-primary text-base">check_circle</span>
                                            Batu Cermin Souvenir Pack</li>
                                    </ul>
                                </div>
                                <div
                                    class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                    <div>
                                        <p class="text-[10px] text-slate-400 uppercase font-bold">Premium All-In</p>
                                        <p class="text-2xl font-extrabold text-primary">IDR 350.000</p>
                                    </div>
                                    <button
                                        class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center gap-2">
                                        <span class="material-icons-round text-sm">add_shopping_cart</span>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Summary Sidebar -->
            <div class="w-full lg:w-96">
                <div class="sticky top-24">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl shadow-xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                        <div class="bg-accent-teal dark:bg-primary p-4 text-white">
                            <h2 class="font-bold flex items-center gap-2">
                                <span class="material-icons-round">shopping_bag</span>
                                Booking Summary
                            </h2>
                        </div>
                        <div class="p-6">
                            <!-- Items List -->
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="font-bold text-sm">Guided Discovery Tour</p>
                                        <p class="text-xs text-slate-500">2 Adults • Oct 25, 2023</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-sm text-primary">IDR 250.000</p>
                                        <button
                                            class="text-[10px] text-red-500 font-bold uppercase hover:underline">Remove</button>
                                    </div>
                                </div>
                                <div
                                    class="border-t border-slate-100 dark:border-slate-800 pt-4 flex justify-between items-start">
                                    <div>
                                        <p class="font-bold text-sm">Full Digital Experience</p>
                                        <p class="text-xs text-slate-500">1 Adult • Oct 25, 2023</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-sm text-primary">IDR 350.000</p>
                                        <button
                                            class="text-[10px] text-red-500 font-bold uppercase hover:underline">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Calculations -->
                            <div class="space-y-2 border-t border-slate-100 dark:border-slate-800 pt-4 mb-6">
                                <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                                    <span>Subtotal</span>
                                    <span>IDR 600.000</span>
                                </div>
                                <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                                    <span>Service Tax (11%)</span>
                                    <span>IDR 66.000</span>
                                </div>
                                <div
                                    class="flex justify-between text-lg font-extrabold text-accent-teal dark:text-white pt-2">
                                    <span>Total</span>
                                    <span class="text-primary">IDR 666.000</span>
                                </div>
                            </div>
                            <!-- CTA -->
                            <button
                                class="w-full bg-primary text-white py-4 rounded-xl font-extrabold text-base hover:bg-primary/90 transition-all shadow-lg shadow-primary/30 flex items-center justify-center gap-3">
                                Proceed to Checkout
                                <span class="material-icons-round">arrow_forward</span>
                            </button>
                            <p class="mt-4 text-[10px] text-center text-slate-400 uppercase tracking-widest font-bold">
                                Secure SSL Encrypted Booking</p>
                        </div>
                    </div>
                    <!-- Map/Location Preview -->
                    <div
                        class="mt-6 bg-accent-sand dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="material-icons-round text-primary">location_on</span>
                            <div>
                                <h4 class="text-sm font-bold text-accent-teal dark:text-white leading-none">Location
                                </h4>
                                <p class="text-xs text-slate-500">Batu Cermin, Labuan Bajo</p>
                            </div>
                        </div>
                        <div class="rounded-lg overflow-hidden h-24 relative">
                            <img class="w-full h-full object-cover"
                                data-alt="Stylized map showing Batu Cermin Cave location" data-location="Labuan Bajo"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcmw5F9RltBoQeoKMFi3o7ywOrlYkOepc1EfdJSILMzDhAMGoRUFYWt8gdj1wYN71NmGG2wu3phH8TWgqNc6iGoZlDvxs2FT4W863r99hxV7XUrWc7TxjCjqIXPnAsfzBEtCEa2rchEhSKq2ZSCoBAUxrEomleufjr1tpNusbToBV-t_uVDpUgOCybgCMTNgTfRZGuPPNvJAM-B4TnWCvt6DYRviUdhm5wKSRLhT8zcobgGRuFWfTcT6iCCKHmjDyuiXHpy8iHVbo" />
                            <div class="absolute inset-0 bg-primary/20 flex items-center justify-center">
                                <span
                                    class="bg-white/90 text-primary text-[10px] font-bold px-3 py-1 rounded-full shadow-lg">VIEW
                                    MAP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 360 Callout -->
        <div
            class="mt-16 bg-gradient-to-r from-accent-teal to-[#1a6b63] rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
            <div class="relative z-10 max-w-2xl">
                <span
                    class="bg-primary/30 text-primary-light text-xs font-bold px-3 py-1 rounded-full border border-primary/50 mb-4 inline-block">VIRTUAL
                    TOUR</span>
                <h2 class="text-3xl md:text-5xl font-extrabold mb-6 leading-tight">Can't wait to see the Mirror Stone?
                </h2>
                <p class="text-slate-200 text-lg mb-8">Take a sneak peek inside the cave with our high-definition
                    360-degree virtual tour. Explore the shimmering walls and stalactites from the comfort of your home.
                </p>
                <button
                    class="bg-white text-accent-teal px-8 py-4 rounded-xl font-extrabold hover:bg-slate-100 transition-all flex items-center gap-3">
                    <span class="material-icons-round">vrpano</span>
                    Launch 360° Preview
                </button>
            </div>
            <!-- Decorative Cave Silhouette Pattern -->
            <div class="absolute right-[-10%] top-[-20%] w-[60%] h-[140%] opacity-20 pointer-events-none rotate-12">
                <span class="material-icons-round text-[400px]">filter_hdr</span>
            </div>
        </div>
    </main>
    <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 mt-20 py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex justify-center items-center gap-2 mb-6">
                <div class="bg-primary p-1.5 rounded-lg">
                    <span class="material-icons-round text-white text-sm">landscape</span>
                </div>
                <span class="text-lg font-extrabold tracking-tight text-accent-teal dark:text-primary">Batu
                    Cermin</span>
            </div>
            <p class="text-slate-500 text-sm mb-8">Part of the Flores Tourism Board Network. Labuan Bajo, NTT,
                Indonesia.</p>
            <div class="flex justify-center gap-6 text-slate-400">
                <a class="hover:text-primary" href="#"><span class="material-icons-round">facebook</span></a>
                <a class="hover:text-primary" href="#"><span class="material-icons-round">camera_alt</span></a>
                <a class="hover:text-primary" href="#"><span class="material-icons-round">public</span></a>
            </div>
            <div class="mt-8 pt-8 border-t border-slate-100 dark:border-slate-800">
                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">© 2023 Batu Cermin Discovery.
                    All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script>
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
    </script>
</body>

</html>