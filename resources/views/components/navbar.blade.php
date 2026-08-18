<header id="site-navbar" class="absolute inset-x-0 top-0 z-[100]">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 sm:px-8 lg:px-10">

        {{-- LEFT: Mobile menu --}}
        <button type="button" id="mobile-menu-button"
            class="flex h-11 w-11 items-center justify-center rounded-full border-2 border-kamo-cream/60 text-kamo-cream transition hover:bg-kamo-cream hover:text-kamo-brown md:hidden"
            aria-label="Open navigation">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

        </button>


        {{-- LOGO --}}

        <a href="/" class="absolute left-1/2 top-4 flex -translate-x-1/2 flex-col items-center">

            {{-- Use actual logo when available --}}
            {{-- <img src="{{ asset('storage/kamos-kitchen/logo.png') }}" alt="Kamo's Kitchen"
            class="h-20 w-auto object-contain drop-shadow-md sm:h-24"> --}}
            <x-animated-logo />
        </a>



        {{-- DESKTOP NAV --}}
        <div class="hidden items-center gap-8 md:flex">

            <a href="#menu" class="kamo-nav-link">
                Menu
            </a>

            <a href="#specials" class="kamo-nav-link">
                Specials
            </a>

            <a href="#story" class="kamo-nav-link">
                Our Story
            </a>

        </div>


        {{-- RIGHT --}}
        <div class="ml-auto flex items-center gap-3">

            <a href="#catering"
                class="hidden border-2 border-kamo-cream px-5 py-3 font-body text-xs font-extrabold uppercase tracking-[0.15em] text-kamo-cream transition hover:bg-kamo-cream hover:text-kamo-brown sm:block">
                Catering
            </a>

            <a href="#order" class="kamo-order-button">
                Order Now
            </a>

        </div>

    </nav>


    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden border-y-2 border-kamo-brown/10 bg-kamo-cream px-6 py-8 md:hidden">

        <div class="flex flex-col gap-5">

            <a href="#menu" class="font-display text-3xl text-kamo-brown">
                Menu
            </a>

            <a href="#specials" class="font-display text-3xl text-kamo-brown">
                Specials
            </a>

            <a href="#story" class="font-display text-3xl text-kamo-brown">
                Our Story
            </a>

            <a href="#catering" class="font-display text-3xl text-kamo-brown">
                Catering
            </a>

        </div>

    </div>

</header>
