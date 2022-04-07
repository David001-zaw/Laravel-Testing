<div>
    {{-- <p class="alert {{ $type }}">{{ $message }}</p> --}}

    {{-- $attributes tone ml so yin class yae a nout mhr pl tone ya ml --}}
    {{-- <p class="alert {{ $typeClass() }}" {{ $attributes }}>{{ $slot }}</p> --}}

    {{-- $attributes merge ml so yin, a char attributes twy yae a shae mhr yay ya ml --}}
    <p {{ $attributes->merge(['class' => 'alert '.$typeClass(), 'data-category' => 'web development']) }} data-id="20">{{ $slot }}</p>

</div>
