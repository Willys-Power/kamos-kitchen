<header id="site-navbar" class="absolute inset-x-0 top-0 z-[100]">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 sm:px-8 lg:px-10">

        {{-- LEFT: Mobile menu --}}
        <button id="menu-button" type="button"
            class="md:hidden relative z-[100] flex h-12 w-12 items-center justify-center rounded-full bg-kamo-yellow"
            aria-label="Open menu">
            <span class="sr-only">Open menu</span>

            <div class="flex flex-col gap-1.5">
                <span class="block h-0.5 w-6 bg-kamo-green"></span>
                <span class="block h-0.5 w-6 bg-kamo-green"></span>
                <span class="block h-0.5 w-6 bg-kamo-green"></span>
            </div>
        </button>


        {{-- LOGO --}}

        <a href="/" class="absolute left-1/2 top-4 flex -translate-x-1/2 flex-col items-center">
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

    {{-- Mobile fullscreen menu --}}
    <div id="mobile-menu" class="fixed inset-0 z-[90] hidden bg-kamo-green">

        <div class="flex min-h-screen flex-col px-8 py-8">

            {{-- Close --}}
            <div class="flex justify-end">

                <button id="menu-close" type="button"
                    class="flex h-12 w-12 items-center justify-center rounded-full bg-kamo-yellow text-2xl text-kamo-green"
                    aria-label="Close menu">
                    ×
                </button>

            </div>


            {{-- Menu --}}
            <nav class="flex flex-1 flex-col items-center justify-center gap-8">

                <a href="#home" class="font-display text-5xl text-kamo-cream">
                    Home
                </a>

                <a href="#menu" class="font-display text-5xl text-kamo-cream">
                    Menu
                </a>

                <a href="#specials" class="font-display text-5xl text-kamo-cream">
                    Specials
                </a>

                <a href="#story" class="font-display text-5xl text-kamo-cream">
                    Our Story
                </a>

                <a href="#contact" class="font-display text-5xl text-kamo-cream">
                    Contact
                </a>

            </nav>

        </div>

    </div>
</header>
