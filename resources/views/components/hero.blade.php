<section class="relative min-h-screen overflow-hidden bg-[#241f1b]">

    {{-- Background image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=2200&q=85"
            alt="Freshly prepared food at Kamo's Kitchen" class="h-full w-full object-cover">

        <div class="absolute inset-0 bg-black/45"></div>

        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-black/30"></div>
    </div>

    {{-- Content --}}
    <div class="relative mx-auto flex min-h-screen max-w-7xl items-end px-6 pb-20 pt-32 lg:px-8 lg:pb-24">

        <div class="max-w-3xl text-white">

            <p class="mb-5 text-xs font-semibold uppercase tracking-[0.35em] text-white/80">
                Welcome to Kamo's Kitchen
            </p>

            <h1 class="font-serif text-6xl leading-[0.9] tracking-tight sm:text-7xl lg:text-9xl">
                Food that
                <span class="italic">feels</span>
                like home.
            </h1>

            <p class="mt-7 max-w-xl text-base leading-7 text-white/80 sm:text-lg">
                Freshly prepared dishes, comforting flavours and good food
                made for sharing.
            </p>

            <div class="mt-9 flex flex-wrap gap-3">

                <a href="#menu"
                    class="bg-white px-7 py-4 text-xs font-bold uppercase tracking-[0.2em] text-[#241f1b] transition hover:bg-[#eee6dc]">
                    View Menu
                </a>

                <a href="#order"
                    class="border border-white/70 px-7 py-4 text-xs font-bold uppercase tracking-[0.2em] text-white transition hover:bg-white hover:text-[#241f1b]">
                    Order on Mr D
                </a>

            </div>

        </div>

    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-7 right-7 hidden items-center gap-3 text-white/70 lg:flex">

        <span class="text-[0.6rem] uppercase tracking-[0.3em]">
            Explore
        </span>

        <span class="h-px w-10 bg-white/50"></span>

    </div>

</section>
