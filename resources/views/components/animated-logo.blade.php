<div {{ $attributes->merge([
    'class' => 'kamo-logo-motion',
]) }} aria-label="Kamo's Kitchen">

    {{-- =====================================================
         LOGO IMAGE
         Use a transparent PNG/WebP version of the logo.
    ====================================================== --}}

    <div class="kamo-logo-art">

        <img src="{{ asset('storage/kamos-kitchen/logo.png') }}" alt="Kamo's Kitchen" class="kamo-logo-image object-contain drop-shadow-md sm:h-24">

        {{-- Animated steam --}}
        <div class="kamo-logo-steam" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
        </div>

        {{-- Gold shine --}}
        {{-- <div class="kamo-logo-shine" aria-hidden="true"></div> --}}

    </div>

</div>
