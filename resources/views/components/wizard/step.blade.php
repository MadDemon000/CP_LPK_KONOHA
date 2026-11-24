<div>
    {{--
    Satu panel langkah.
    <x-wizard.step title="Data Pribadi" description="..." summary active> ...isi... </x-wizard.step>

    summary : true -> langkah ini ikut ditampilkan di halaman konfirmasi (judulnya = title)
    active  : true -> langkah yang terbuka saat halaman dimuat (biasanya yang pertama)
--}}
    @props(['title', 'description' => null, 'summary' => false, 'active' => false])

    <div data-step-panel @if ($summary) data-summary-title="{{ $title }}" @endif
        @class(['space-y-5', 'hidden' => !$active])>
        <div>
            <h2 class="text-xl font-bold text-gray-800">{{ $title }}</h2>
            @if ($description)
                <p class="text-sm text-gray-500">{{ $description }}</p>
            @endif
        </div>

        {{ $slot }}
    </div>
</div>
