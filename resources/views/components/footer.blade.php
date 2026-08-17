<footer class="bg-[#181411] text-white">

    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="lg:col-span-2">

                <a href="/" class="inline-block">

                    <span class="block font-serif text-3xl">
                        Kamo's
                    </span>

                    <span class="block text-[0.65rem] uppercase tracking-[0.35em] text-white/50">
                        Kitchen
                    </span>

                </a>

                <p class="mt-6 max-w-sm text-sm leading-7 text-white/50">
                    Freshly prepared food, comforting flavours and good
                    moments around the table.
                </p>

            </div>


            {{-- Navigation --}}
            <div>

                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white/40">
                    Explore
                </h3>

                <ul class="mt-5 space-y-3 text-sm">

                    <li>
                        <a href="#menu" class="text-white/70 transition hover:text-white">
                            Menu
                        </a>
                    </li>

                    <li>
                        <a href="#specials" class="text-white/70 transition hover:text-white">
                            Specials
                        </a>
                    </li>

                    <li>
                        <a href="#story" class="text-white/70 transition hover:text-white">
                            Our Story
                        </a>
                    </li>

                    <li>
                        <a href="#catering" class="text-white/70 transition hover:text-white">
                            Catering
                        </a>
                    </li>

                </ul>

            </div>


            {{-- Contact --}}
            <div>

                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white/40">
                    Connect
                </h3>

                <ul class="mt-5 space-y-3 text-sm">

                    <li>
                        <a href="#" class="text-white/70 transition hover:text-white">
                            Instagram
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-white/70 transition hover:text-white">
                            TikTok
                        </a>
                    </li>

                    <li>
                        <a href="mailto:hello@kamoskitchen.co.za" class="text-white/70 transition hover:text-white">
                            Email us
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        <div
            class="mt-16 flex flex-col justify-between gap-4 border-t border-white/10 pt-7 text-xs text-white/35 sm:flex-row">

            <p>
                © {{ date('Y') }} Kamo's Kitchen. All rights reserved.
            </p>

            <p>
                Made with care.
            </p>

        </div>

    </div>

</footer>
