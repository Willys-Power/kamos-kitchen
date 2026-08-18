<section id="specials" class="bg-[#30261f] py-24 text-[#f7f3ed] sm:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">

            {{-- Image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('storage/kamos-kitchen/burger.png') }}"
                    alt="Kamo's seasonal special" class="aspect-[4/5] w-full object-cover">
            </div>


            {{-- Content --}}
            <div class="lg:py-10">

                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-[#c9a987]">
                    What's cooking
                </p>

                <h2 class="mt-5 font-serif text-5xl leading-none sm:text-7xl">
                    Something
                    <span class="italic">special.</span>
                </h2>

                <p class="mt-7 max-w-lg text-base leading-8 text-white/65">
                    Our menu changes with the seasons, celebrations and
                    whatever inspires Kamo in the kitchen.
                </p>

                <div class="mt-10 border-y border-white/15 py-6">

                    <div class="flex items-start justify-between gap-6">

                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-white/50">
                                Featured this month
                            </p>

                            <h3 class="mt-2 font-serif text-2xl">
                                Seasonal Family Feast
                            </h3>

                            <p class="mt-2 text-sm text-white/60">
                                A generous spread made for sharing.
                            </p>
                        </div>

                        <span class="text-sm font-semibold">
                            R499
                        </span>

                    </div>

                </div>

                <a href="#order"
                    class="mt-9 inline-block border border-white/50 px-7 py-4 text-xs font-bold uppercase tracking-[0.2em] transition hover:bg-white hover:text-[#30261f]">
                    Explore specials
                </a>

            </div>

        </div>

    </div>

</section>
