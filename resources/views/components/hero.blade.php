<section id="home" class="kamo-hero relative min-h-screen overflow-hidden">

    {{-- ============================================================
         PAPER TEXTURE
    ============================================================= --}}

    <div class="pointer-events-none absolute inset-0 kamo-paper-texture"></div>


    {{-- ============================================================
         DECORATIVE BACKGROUND BLOBS
    ============================================================= --}}

    <div class="kamo-blob kamo-blob-orange"></div>

    <div class="kamo-blob kamo-blob-yellow"></div>


    {{-- ============================================================
         DECORATIVE FOOD
    ============================================================= --}}

    {{-- Tomato --}}
    <img src="{{ asset('storage/kamos-kitchen/tomato.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-tomato">


    {{-- Lettuce --}}
    <img src="{{ asset('storage/kamos-kitchen/lettuce.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-lettuce">


    {{-- Chicken --}}
    <img src="{{ asset('storage/kamos-kitchen/wings0.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-chicken">


    {{-- Burger --}}
    <img src="{{ asset('storage/kamos-kitchen/wingsfries.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-burger">


    {{-- Fries --}}
    <img src="{{ asset('storage/kamos-kitchen/fries.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-fries">


    {{-- Onion --}}
    <img src="{{ asset('storage/kamos-kitchen/onions.png') }}" alt="" aria-hidden="true"
        class="kamo-food kamo-food-onion">


    {{-- ============================================================
         DECORATIVE DOODLES
    ============================================================= --}}

    <div class="kamo-spark kamo-spark-one">
        ✦
    </div>

    <div class="kamo-spark kamo-spark-two">
        ✦
    </div>

    <div class="kamo-spark kamo-spark-three">
        ✦
    </div>


    <div class="kamo-doodle kamo-doodle-one">
        <span></span>
        <span></span>
        <span></span>
    </div>


    <div class="kamo-doodle kamo-doodle-two">
        <span></span>
        <span></span>
        <span></span>
    </div>


    {{-- ============================================================
         MAIN HERO CONTENT
    ============================================================= --}}

    <div
        class="relative z-20 mx-auto flex min-h-screen max-w-7xl flex-col items-center justify-center px-6 pb-28 pt-32 text-center">

        {{-- Small tagline --}}
        <div class="kamo-hero-tagline">
            Homemade
            <span>•</span>
            Quality
            <span>•</span>
            Flavour
        </div>


        {{-- Main brand --}}
        <div class="relative mt-5">

            {{-- Shadow / outline --}}
            <h1 class="kamo-display kamo-display-shadow" aria-hidden="true">
                Kamo's
            </h1>

            <h1 class="kamo-display">
                Kamo's
            </h1>

        </div>


        <div class="relative -mt-3 sm:-mt-6">

            {{-- Shadow --}}
            <h2 class="kamo-display kamo-display-shadow kamo-display-orange" aria-hidden="true">
                Kitchen
            </h2>

            <h2 class="kamo-display kamo-display-orange">
                Kitchen
            </h2>

        </div>


        {{-- Yellow hand-painted strap --}}
        <div class="kamo-brush-stroke">

            <span>
                Food that brings people together.
            </span>

        </div>


        {{-- CTA --}}
        <div class="relative z-30 mt-7">

            <a href="#order" class="kamo-hero-order">
                <span>
                    Order Now
                </span>

                <span class="kamo-hero-order-arrow">
                    →
                </span>
            </a>

        </div>


        {{-- Small supporting text --}}
        <p class="mt-5 max-w-sm font-body text-sm font-semibold text-kamo-cream/80 sm:text-base">
            Homemade meals. Big flavour. Good vibes.
        </p>

    </div>


    {{-- ============================================================
         BOTTOM TICKER
    ============================================================= --}}

    <div
        class="absolute bottom-0 left-0 z-40 w-full overflow-hidden border-t-2 border-kamo-brown/20 bg-kamo-orange py-3">

        <div class="kamo-marquee">

            @for ($i = 0; $i < 8; $i++)
                <div class="flex shrink-0 items-center">

                    <span>
                        HOMEMADE
                    </span>

                    <b>✦</b>

                    <span>
                        QUALITY
                    </span>

                    <b>✦</b>

                    <span>
                        FLAVOUR
                    </span>

                    <b>✦</b>

                    <span>
                        KAMO'S KITCHEN
                    </span>

                    <b>✦</b>

                </div>
            @endfor

        </div>

    </div>

</section>
