<div>
    {{-- Dua kolom di layar >= sm, satu kolom di HP --}}
    <div {{ $attributes->merge(['class' => 'grid gap-5 sm:grid-cols-2']) }}>
        {{ $slot }}
    </div>

</div>
