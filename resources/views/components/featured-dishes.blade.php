<section class="relative py-24 sm:py-32 overflow-hidden bg-[var(--color-kamo-cream)]">

    {{-- Scroll indicator from hero --}}
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-12 h-12 border-2 border-kamo-orange rounded-full flex items-center justify-center opacity-0 animate-[slideUp_.5s_.3s_ease-out_forwards] sm:opacity-20">
        <span class="text-xs font-bold uppercase tracking-wider text-kamo-orange">
            ↓ Scroll for more
        </span>
    </div>

    {{-- decorative wave at top --}}
    <div
        class="absolute top-0 left-0 right-0 h-96 bg-gradient-to-b from-kamo-orange/5 via-kamo-yellow/5 to-transparent opacity-80 pointer-events-none">
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Category reveal --}}
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-kamo-olive">
                    From our kitchen
                </p>

                <h2
                    class="kamo-display kamo-display-orange mt-4 max-w-xl font-serif text-5xl leading-none tracking-tight sm:text-7xl">
                    Made for the
                    <span class="italic">moment.</span>
                </h2>

                {{-- Order Now CTA prominent at bottom of header --}}
                <div class="mt-8 flex items-center gap-3 pt-4 border-t border-kamo-orange/20">

                    <a href="#order" class="kamo-hero-order flex items-center gap-2">
                        <span>Order Now</span>

                        <svg class="kamo-hero-order-arrow" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Floating "made fresh" tag --}}
            <div class="relative -top-6 right-0">
                <div class="kamo-spark kamo-spark-one text-kamo-yellow animate-kamoSpark" style="font-size: 1.5rem;">
                    &starf;
                </div>
                <div
                    class="absolute -bottom-2 -right-2 rounded-full bg-kamo-green/20 px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-kamo-green">
                    Fresh
                </div>
            </div>

        </div>


        {{-- Dishes grid with food-inspired animations --}}
        {{-- ============================================================
    KAMO'S KITCHEN — FEATURED DISHES
    Editorial / hand-drawn food poster style
============================================================ --}}

        <div class="mt-16 md:mt-24">

            <div class="grid grid-cols-1 gap-16 md:grid-cols-12 md:gap-8">


                {{-- =====================================================
            DISH 01
        ====================================================== --}}

                <article class="kamo-dish-card group relative md:col-span-5 md:mt-8">

                    {{-- Decorative number --}}
                    <div
                        class="absolute -left-3 -top-8 z-20 font-serif text-7xl font-black leading-none text-kamo-orange/20 md:-left-8">
                        01
                    </div>


                    {{-- Handwritten label --}}
                    <div
                        class="absolute -right-2 top-4 z-30 -rotate-6 font-script text-xl text-kamo-orange md:-right-8">
                        crowd favourite
                    </div>


                    {{-- Image --}}
                    <div class="relative overflow-visible">

                        {{-- Background paper shape --}}
                        <div class="absolute inset-0 translate-x-3 translate-y-3 rotate-2 bg-kamo-orange/20"></div>


                        {{-- Image frame --}}
                        <div class="relative aspect-[4/5] overflow-hidden bg-kamo-brown">

                            <img src="{{ asset('storage/kamos-kitchen/kamo_3.png') }}" alt="Gummy Smoothy"
                                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 group-hover:rotate-1" />


                            {{-- subtle colour wash --}}
                            <div
                                class="pointer-events-none absolute inset-0 bg-kamo-orange/0 transition-colors duration-500 group-hover:bg-kamo-orange/10">
                            </div>


                            {{-- hand drawn corner --}}
                            <div class="absolute bottom-4 left-4 h-12 w-12 border-b-2 border-l-2 border-kamo-cream/70">
                            </div>

                        </div>


                        {{-- Price sticker --}}
                        <div
                            class="absolute -bottom-6 -right-3 z-20 flex h-20 w-20 rotate-6 items-center justify-center rounded-full bg-kamo-yellow shadow-lg transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">

                            <div class="text-center">

                                <span class="block text-[9px] font-bold uppercase tracking-wider text-kamo-green">
                                    only
                                </span>

                                <span class="block font-serif text-2xl font-black text-kamo-green">
                                    R15
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="relative mt-10 pr-6">

                        {{-- hand drawn divider --}}
                        <div class="mb-4 flex items-center gap-3">

                            <span class="h-[2px] w-12 rotate-1 bg-kamo-orange"></span>

                            <span class="font-script text-sm text-kamo-orange">
                                made fresh
                            </span>

                        </div>


                        <h3 class="font-display text-4xl leading-none text-kamo-cream md:text-5xl">
                            Gummy
                            <span class="text-kamo-orange">
                                Smoothy
                            </span>
                        </h3>


                        <p class="mt-4 max-w-sm text-sm leading-7 text-kamo-cream/70">
                            Fresh ingredients, bold flavours and a little
                            something sweet from Kamo's kitchen.
                        </p>

                    </div>

                </article>



                {{-- =====================================================
            DISH 02
        ====================================================== --}}

                <article class="kamo-dish-card group relative md:col-span-5 md:col-start-8 md:-mt-12">

                    {{-- Decorative number --}}
                    <div
                        class="absolute -right-2 -top-8 z-20 font-serif text-7xl font-black leading-none text-kamo-green/30 md:-right-8">
                        02
                    </div>


                    {{-- Seasonal label --}}
                    <div class="absolute -left-4 top-8 z-30 rotate-3 font-script text-xl text-kamo-yellow md:-left-10">
                        straight from the kitchen
                    </div>


                    {{-- Image --}}
                    <div class="relative overflow-visible">

                        {{-- Green paper shadow --}}
                        <div class="absolute inset-0 -translate-x-3 translate-y-3 -rotate-2 bg-kamo-green/30"></div>


                        <div class="relative aspect-[4/5] overflow-hidden bg-kamo-brown">

                            <img src="{{ asset('storage/kamos-kitchen/special-meal.png') }}" alt="Home Style Plate"
                                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 group-hover:-rotate-1" />


                            <div
                                class="pointer-events-none absolute inset-0 bg-kamo-green/0 transition-colors duration-500 group-hover:bg-kamo-green/10">
                            </div>


                            {{-- little drawn star --}}
                            <svg class="absolute right-5 top-5 h-8 w-8 text-kamo-yellow opacity-80 transition-transform duration-500 group-hover:rotate-45 group-hover:scale-125"
                                viewBox="0 0 40 40" fill="none">
                                <path d="M20 2L23 17L38 20L23 23L20 38L17 23L2 20L17 17L20 2Z" fill="currentColor" />
                            </svg>

                        </div>


                        {{-- Price --}}
                        <div
                            class="absolute -bottom-5 -left-4 z-20 rotate-[-7deg] bg-kamo-cream px-5 py-3 shadow-lg transition-transform duration-300 group-hover:-rotate-3 group-hover:scale-105">

                            <span class="block font-serif text-2xl font-black text-kamo-green">
                                R119
                            </span>

                            <span class="block text-[8px] font-bold uppercase tracking-[.2em] text-kamo-green/60">
                                homemade
                            </span>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="relative mt-10 pl-2">

                        <div class="mb-4 flex items-center gap-3">

                            <span class="font-script text-sm text-kamo-green">
                                comfort food
                            </span>

                            <span class="h-[2px] w-10 -rotate-2 bg-kamo-green"></span>

                        </div>


                        <h3 class="font-display text-4xl leading-none text-kamo-cream md:text-5xl">
                            Home-Style
                            <span class="text-kamo-yellow">
                                Plate
                            </span>
                        </h3>


                        <p class="mt-4 max-w-sm text-sm leading-7 text-kamo-cream/70">
                            Comfort food, the Kamo's way.
                            Familiar flavours made with homemade love.
                        </p>

                    </div>

                </article>



                {{-- =====================================================
            DISH 03 — FEATURED / BIGGER
        ====================================================== --}}

                <article class="kamo-dish-card group relative md:col-span-7 md:col-start-3 md:mt-12">

                    {{-- Big background number --}}
                    <div
                        class="pointer-events-none absolute -left-16 -top-16 z-0 hidden font-serif text-[12rem] font-black leading-none text-kamo-yellow/10 md:block">
                        03
                    </div>


                    {{-- Special handwritten heading --}}
                    <div
                        class="absolute -right-3 -top-10 z-30 rotate-[-4deg] font-script text-2xl text-kamo-yellow md:right-4">
                        Kamo's pick!
                    </div>


                    {{-- Main image --}}
                    <div class="relative overflow-visible">

                        {{-- Paper shadow --}}
                        <div class="absolute inset-0 translate-x-4 translate-y-4 -rotate-1 bg-kamo-yellow/20"></div>


                        <div class="relative aspect-[16/10] overflow-hidden bg-kamo-brown">

                            <img src="{{ asset('storage/kamos-kitchen/kamo_4.png') }}" alt="Kamo's Favourite"
                                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 group-hover:rotate-[0.5deg]" />


                            <div
                                class="pointer-events-none absolute inset-0 bg-kamo-yellow/0 transition-colors duration-500 group-hover:bg-kamo-yellow/10">
                            </div>


                            {{-- drawn border --}}
                            <div class="pointer-events-none absolute inset-4 border border-kamo-cream/30"></div>

                        </div>


                        {{-- Featured price --}}
                        <div
                            class="absolute -bottom-7 right-6 z-20 flex h-24 w-24 -rotate-3 items-center justify-center rounded-full border-4 border-kamo-green bg-kamo-yellow shadow-xl transition-transform duration-300 group-hover:rotate-3 group-hover:scale-110">

                            <div class="text-center">

                                <span class="block font-script text-xs text-kamo-green">
                                    just
                                </span>

                                <span class="block font-serif text-3xl font-black text-kamo-green">
                                    R30
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="mt-10 grid gap-6 md:grid-cols-[1fr_auto] md:items-end">

                        <div>

                            <div class="mb-4 flex items-center gap-3">

                                <span class="h-[2px] w-14 rotate-1 bg-kamo-yellow"></span>

                                <span class="font-script text-sm text-kamo-yellow">
                                    chef's choice
                                </span>

                            </div>


                            <h3 class="font-display text-5xl leading-none text-kamo-cream md:text-6xl">
                                Kamo's
                                <span class="text-kamo-orange">
                                    Favourite
                                </span>
                            </h3>


                            <p class="mt-5 max-w-xl text-sm leading-7 text-kamo-cream/70">
                                One of the dishes we love most.
                                Prepared with the flavours that make
                                Kamo's Kitchen feel like home.
                            </p>

                        </div>


                        {{-- Mini graphic --}}
                        <div class="hidden md:block">

                            <svg width="90" height="45" viewBox="0 0 90 45" fill="none"
                                class="text-kamo-cream/50">

                                <path d="M5 22C25 5 65 5 85 22" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />

                                <path d="M20 29C35 20 55 20 70 29" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />

                            </svg>

                        </div>

                    </div>

                </article>

            </div>


            {{-- ============================================================
        VIEW FULL MENU CTA
    ============================================================= --}}

            <div class="mt-20 flex justify-center">

                <a href="#menu"
                    class="group inline-flex items-center gap-4 font-display text-2xl text-kamo-cream transition-colors hover:text-kamo-yellow">

                    <span>
                        See the full menu
                    </span>

                    <span
                        class="flex h-11 w-11 rotate-[-8deg] items-center justify-center rounded-full bg-kamo-orange text-kamo-cream transition-transform duration-300 group-hover:rotate-6 group-hover:translate-x-2">
                        →
                    </span>

                </a>

            </div>

        </div>

        {{-- Sticky CTA at bottom --}}
        <div class="mt-16 border-t border-kamo-orange/20 pt-8">

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-kamo-olive">
                    Chef's recommendation
                </p>

                <a href="#order"
                    class="kamo-hero-order text-sm px-5 py-3 rounded-full bg-kamo-orange hover:bg-kamo-orange/90 transition-colors duration-300 shadow-lg shadow-kamo-orange/20">
                    Order Now
                    <svg class="kamo-hero-order-arrow w-4 h-4" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>

            </div>

        </div>

    </div>

</section>

<script>
    (() => {
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -60px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Stagger animations for dishes
                    const dishes = document.querySelectorAll(
                        '.kamo-food, .kamo-display, .kamo-spark, article.grid > *');
                    dishes.forEach((dish, i) => {
                        setTimeout(() => {
                            dish.style.animationPlayState = 'running';
                        }, i * 120);
                    });

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe the dishes container and hero elements
        const elements = [
            ...document.querySelectorAll('.kamo-food'),
            ...document.querySelectorAll('.kamo-display'),
            ...document.querySelectorAll('.kamo-spark')
        ];

        elements.forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    })();
</script>
