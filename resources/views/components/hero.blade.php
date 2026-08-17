<section
    id="home"
    class="relative min-h-screen overflow-hidden bg-kamo-green"
>

    {{-- Decorative background --}}
    <div
        class="absolute inset-0 opacity-20"
        aria-hidden="true"
    >
        <div class="absolute -left-20 top-32 h-72 w-72 rounded-full bg-kamo-yellow blur-3xl"></div>

        <div class="absolute -right-20 bottom-20 h-96 w-96 rounded-full bg-kamo-orange blur-3xl"></div>
    </div>


    {{-- Decorative circles --}}
    <div
        class="absolute left-[8%] top-[30%] h-3 w-3 animate-pulse rounded-full bg-kamo-orange"
    ></div>

    <div
        class="absolute right-[12%] top-[20%] h-5 w-5 animate-bounce rounded-full bg-kamo-yellow"
    ></div>


    {{-- Main content --}}
    <div class="relative mx-auto flex min-h-screen max-w-7xl items-center px-6 py-32 lg:px-8">

        <div class="grid w-full items-center gap-10 lg:grid-cols-2">


            {{-- LEFT: Typography --}}
            <div class="relative z-20">

                {{-- Small brand label --}}
                <div
                    class="mb-6 inline-flex items-center gap-3 opacity-0 animate-[heroFade_.7s_.1s_ease-out_forwards]"
                >
                    <span class="h-2 w-2 rounded-full bg-kamo-orange"></span>

                    <span class="font-body text-xs font-bold uppercase tracking-[0.3em] text-kamo-cream">
                        Homemade. Quality. Flavor.
                    </span>
                </div>


                {{-- Main headline --}}
                <h1
                    class="font-display text-[clamp(5rem,14vw,12rem)] uppercase leading-[.78] tracking-tight text-kamo-orange opacity-0 animate-[heroTitle_.9s_.2s_cubic-bezier(.16,1,.3,1)_forwards]"
                >
                    <span class="block">Good</span>

                    <span class="relative block text-kamo-cream">

                        Food

                        {{-- Script accent --}}
                        <span
                            class="absolute -right-2 -top-8 font-script text-[4rem] font-bold normal-case leading-none text-kamo-yellow rotate-[-8deg] sm:-right-8 sm:text-[5rem]"
                        >
                            made fun
                        </span>

                    </span>

                    <span class="block text-kamo-orange">
                        loud.
                    </span>
                </h1>


                {{-- Description --}}
                <p
                    class="mt-8 max-w-md font-body text-base leading-7 text-kamo-cream/85 opacity-0 animate-[heroFade_.7s_.7s_ease-out_forwards] sm:text-lg"
                >
                    Big flavours, homemade favourites and dishes made
                    to bring people together.
                </p>


                {{-- CTA --}}
                <div
                    class="mt-8 flex flex-wrap gap-4 opacity-0 animate-[heroFade_.7s_.9s_ease-out_forwards]"
                >

                    <a
                        href="#menu"
                        class="group relative overflow-hidden bg-kamo-orange px-7 py-4 font-body text-xs font-extrabold uppercase tracking-[0.2em] text-kamo-black transition duration-300 hover:-translate-y-1 hover:bg-kamo-yellow"
                    >
                        <span class="relative z-10">
                            Explore Menu
                        </span>
                    </a>


                    <a
                        href="#order"
                        class="border-2 border-kamo-cream px-7 py-4 font-body text-xs font-extrabold uppercase tracking-[0.2em] text-kamo-cream transition duration-300 hover:-translate-y-1 hover:bg-kamo-cream hover:text-kamo-black"
                    >
                        Order Now
                    </a>

                </div>

            </div>


            {{-- RIGHT: Food --}}
            <div class="relative z-10 flex justify-center lg:justify-end">

                {{-- Orange blob --}}
                <div
                    class="absolute h-[75%] w-[75%] rounded-full bg-kamo-orange blur-[2px] opacity-90 animate-[blobFloat_6s_ease-in-out_infinite]"
                ></div>


                {{-- Food image --}}
                <div
                    class="relative w-[85%] rotate-3 opacity-0 animate-[heroImage_1.1s_.3s_cubic-bezier(.16,1,.3,1)_forwards] sm:w-[75%] lg:w-[90%]"
                >

                    <div class="overflow-hidden rounded-[2rem] border-8 border-kamo-cream/20 shadow-2xl">

                        <img
                            src="{{ asset('storage/kamos-kitchen/hero.jpeg') }}"
                            alt="Kamo's Kitchen signature food"
                            class="aspect-[4/5] w-full object-cover transition duration-700 hover:scale-105"
                        >

                    </div>


                    {{-- Floating sticker --}}
                    <div
                        class="absolute -bottom-8 -left-8 flex h-28 w-28 -rotate-12 items-center justify-center rounded-full bg-kamo-yellow text-center shadow-xl animate-[stickerFloat_4s_ease-in-out_infinite]"
                    >
                        <span class="font-display text-xl uppercase leading-none text-kamo-black">
                            Fresh<br>
                            &<br>
                            Tasty
                        </span>
                    </div>


                    {{-- Orange handwritten label --}}
                    <div
                        class="absolute -right-8 top-8 rotate-6 font-script text-5xl font-bold text-kamo-yellow drop-shadow-lg sm:text-6xl"
                    >
                        YUM!
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom ticker --}}
    <div
        class="absolute bottom-0 left-0 w-full overflow-hidden border-t-2 border-kamo-black/20 bg-kamo-orange py-3"
    >

        <div class="flex w-max animate-[marquee_18s_linear_infinite]">

            @for ($i = 0; $i < 6; $i++)

                <div class="flex items-center">

                    <span class="mx-6 font-display text-xl uppercase text-kamo-black">
                        Homemade
                    </span>

                    <span class="text-kamo-yellow">
                        ✦
                    </span>

                    <span class="mx-6 font-display text-xl uppercase text-kamo-black">
                        Quality
                    </span>

                    <span class="text-kamo-yellow">
                        ✦
                    </span>

                    <span class="mx-6 font-display text-xl uppercase text-kamo-black">
                        Flavor
                    </span>

                    <span class="text-kamo-yellow">
                        ✦
                    </span>

                </div>

            @endfor

        </div>

    </div>

</section>