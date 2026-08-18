<div id="kamo-loader" class="kamo-loader" role="status" aria-label="Loading Kamo's Kitchen">

    <div class="kamo-loader-inner">

        {{-- Logo --}}
        <div class="kamo-loader-logo">

            <img src="{{ asset('storage/kamos-kitchen/logo.png') }}" alt="Kamo's Kitchen">

        </div>


        {{-- Fork + knife --}}
        <div class="kamo-cutlery-loader" aria-hidden="true">

            {{-- Fork --}}
            <svg class="kamo-fork" viewBox="0 0 80 180" xmlns="http://www.w3.org/2000/svg">

                <path d="M20 10V65" />

                <path d="M32 10V65" />

                <path d="M44 10V65" />

                <path d="M56 10V65" />

                <path d="M20 65
                       C20 82 29 91 40 91
                       V170" />

            </svg>


            {{-- Knife --}}
            <svg class="kamo-knife" viewBox="0 0 80 180" xmlns="http://www.w3.org/2000/svg">

                <path d="M40 10
                       C65 25 67 55 40 82
                       V170" />

                <path d="M40 82
                       C25 72 20 52 24 34" />

            </svg>

        </div>


        {{-- Progress --}}
        <div class="kamo-loader-progress">

            <div id="kamo-loader-progress-bar" class="kamo-loader-progress-bar"></div>

        </div>


        <p class="kamo-loader-text">
            Preparing something delicious
        </p>

    </div>

</div>
