<section class="relative py-24 sm:py-32 overflow-hidden bg-[var(--color-kamo-cream)]">

    {{-- Scroll indicator from hero --}}
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-12 h-12 border-2 border-kamo-orange rounded-full flex items-center justify-center opacity-0 animate-[slideUp_.5s_.3s_ease-out_forwards] sm:opacity-20"
    >
        <span class="text-xs font-bold uppercase tracking-wider text-kamo-orange">
            ↓ Scroll for more
        </span>
    </div>

    {{-- decorative wave at top --}}
    <div
        class="absolute top-0 left-0 right-0 h-96 bg-gradient-to-b from-kamo-orange/5 via-kamo-yellow/5 to-transparent opacity-80 pointer-events-none"
    ></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Category reveal --}}
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-kamo-olive">
                    From our kitchen
                </p>

                <h2 class="kamo-display kamo-display-orange mt-4 max-w-xl font-serif text-5xl leading-none tracking-tight sm:text-7xl">
                    Made for the
                    <span class="italic">moment.</span>
                </h2>

                {{-- Order Now CTA prominent at bottom of header --}}
                <div class="mt-8 flex items-center gap-3 pt-4 border-t border-kamo-orange/20">

                    <a href="#order"
                        class="kamo-hero-order flex items-center gap-2"
                    >
                        <span>Order Now</span>

                        <svg
                            class="kamo-hero-order-arrow"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Floating "made fresh" tag --}}
            <div class="relative -top-6 right-0">
                <div
                    class="kamo-spark kamo-spark-one text-kamo-yellow animate-kamoSpark"
                    style="font-size: 1.5rem;">&starf;
                </div>
                <div
                    class="absolute -bottom-2 -right-2 rounded-full bg-kamo-green/20 px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-kamo-green"
                >
                    Fresh
                </div>
            </div>

        </div>


        {{-- Dishes grid with food-inspired animations --}}
        <div class="mt-14 grid gap-6 md:grid-cols-3">

            {{-- Dish 1 --}}
            <article class="group relative overflow-hidden">

                {{-- Floating food element above dish --}}
                <div
                    class="absolute -top-4 left-1/2 -translate-x-1/2 kamo-food kamo-food-chicken animate-kamoFoodThree"
                    style="width: clamp(140px, 17vw, 280px); left: -4%; bottom: 13%; transform: rotate(-8deg);"
                >
                    <!-- chicken placeholder -->
                </div>

                {{-- Dish image --}}
                <div class="aspect-[4/5] overflow-hidden rounded-[1rem] bg-kamo-brown/10">

                    <img
                        src="{{ asset('storage/kamos-kitchen/kamo_3.png') }}"
                        alt="Quick kota meal"
                        class="h-full w-full object-cover transition-all duration-700 group-hover:translate-y-2 group-hover:shadow-2xl group-hover:brightness-105"
                    />

                    {{-- Dish badge --}}
                    <div
                        class="absolute -top-2 -left-2 rounded-full bg-kamo-green px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-kamo-cream"
                    >
                        <span class="font-script">New</span>
                    </div>

                </div>

                {{-- Dish info with slide-in --}}
                <div class="flex items-start justify-between gap-4 pt-5">

                    <div>
                        <h3 class="font-serif text-2xl">
                             Gummy Smoothy
                        </h3>

                        <p class="mt-1 text-sm text-[var(--color-kamo-cream)]">
                            Fresh ingredients, bold flavours.
                        </p>
                    </div>

                    <span class="text-sm font-semibold">
                        R15
                    </span>

                </div>

            </article>

            {{-- Dish 2 --}}
            <article class="group relative overflow-hidden">

                {{-- Floating food element above dish --}}
                <div
                    class="absolute -top-4 left-1/2 -translate-x-1/2 kamo-food kamo-food-tomato animate-kamoFoodOne"
                    style="width: clamp(100px, 14vw, 220px); top: 3%; left: -2%; transform: rotate(-18deg);"
                >
                    <!-- tomato placeholder -->
                </div>

                <div class="aspect-[4/5] overflow-hidden bg-kamo-brown/10">

                    <img
                        src="{{ asset('storage/kamos-kitchen/special-meal.png') }}"
                        alt="Fresh vegetable dish"
                        class="h-full w-full object-cover transition-all duration-700 group-hover:translate-y-2 group-hover:shadow-2xl group-hover:brightness-105"
                    />

                    <div
                        class="absolute -top-2 -left-2 rounded-full bg-kamo-orange px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-kamo-cream"
                    >
                        <span class="font-script">Season</span>
                    </div>

                </div>

                <div class="flex items-start justify-between gap-4 pt-5">

                    <div>
                        <h3 class="font-serif text-2xl">
                            Home-Style Plate
                        </h3>

                        <p class="mt-1 text-sm text-[var(--color-kamo-cream)]">
                            Comfort food, the Kamo's way.
                        </p>
                    </div>

                    <span class="text-sm font-semibold">
                        R119
                    </span>

                </div>

            </article>

            {{-- Dish 3 --}}
            <article class="group relative overflow-hidden">

                {{-- Floating food element above dish --}}
                <div
                    class="absolute -top-4 left-1/2 -translate-x-1/2 kamo-food kamo-food-burger animate-kamoFoodFour"
                    style="width: clamp(150px, 21vw, 340px); right: -6%; bottom: 8%; transform: rotate(7deg);"
                >
                    <!-- burger placeholder -->
                </div>

                <div class="aspect-[4/5] overflow-hidden bg-kamo-brown/10">

                    <img
                        src="{{ asset('storage/kamos-kitchen/kamo_4.png') }}"
                        alt="Beautifully prepared meal"
                        class="h-full w-full object-cover transition-all duration-700 group-hover:translate-y-2 group-hover:shadow-2xl group-hover:brightness-105"
                    />

                    <div
                        class="absolute -top-2 -left-2 rounded-full bg-kamo-yellow px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-kamo-brown"
                    >
                        <span class="font-script">Special</span>
                    </div>

                </div>

                <div class="flex items-start justify-between gap-4 pt-5">

                    <div>
                        <h3 class="font-serif text-2xl">
                            Kamo's Favourite
                        </h3>

                        <p class="mt-1 text-sm text-[var(--color-kamo-cream)]">
                            One of the dishes we love most.
                        </p>
                    </div>

                    <span class="text-sm font-semibold">
                        R30
                    </span>

                </div>

            </article>

        </div>

        {{-- Sticky CTA at bottom --}}
        <div class="mt-16 border-t border-kamo-orange/20 pt-8">

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-kamo-olive">
                    Chef's recommendation
                </p>

                <a href="#order"
                    class="kamo-hero-order text-sm px-5 py-3 rounded-full"
                >
                    Order Now
                    <svg
                        class="kamo-hero-order-arrow w-4 h-4"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M5 12h14M12 5l7 7-7 7"/>
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
                    const dishes = document.querySelectorAll('.kamo-food, .kamo-display, .kamo-spark');
                    dishes.forEach((dish, i) => {
                        setTimeout(() => {
                            dish.style.animationPlayState = 'running';
                        }, i * 100);
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