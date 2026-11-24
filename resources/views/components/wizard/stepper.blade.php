<div>
    {{-- <x-wizard.stepper :steps="['Langkah 1', 'Langkah 2', 'Langkah 3']" /> --}}
    @props(['steps' => []])

    @php
        $n = max(count($steps), 1);
        $edge = round(50 / $n, 2); // jarak garis dari tepi = setengah lebar satu kolom
    @endphp

    <ol class="relative mb-8 grid" style="grid-template-columns: repeat({{ $n }}, minmax(0, 1fr))"
        aria-label="Langkah pendaftaran">

        <li aria-hidden="true" class="absolute top-5 h-1 rounded-full bg-gray-200"
            style="left: {{ $edge }}%; right: {{ $edge }}%">
            <div id="step-fill" class="h-full w-0 rounded-full bg-[#FFD21F] transition-all duration-500"></div>
        </li>

        @foreach ($steps as $i => $judul)
            <li data-step-indicator data-state="{{ $i === 0 ? 'active' : 'idle' }}"
                class="group relative flex flex-col items-center gap-2 text-center">
                <span
                    class="flex size-10 items-center justify-center rounded-full border-2 border-blue-950 bg-white text-sm font-bold text-blue-950 transition-all duration-300
                       group-data-[state=active]:bg-[#172241] group-data-[state=active]:text-white
                       group-data-[state=done]:border-[#FFD21F] group-data-[state=done]:bg-[#FFD21F] group-data-[state=done]:text-[#172241]">
                    <span class="num">{{ $i + 1 }}</span>
                    <svg class="check hidden size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </span>
                <span
                    class="text-xs font-semibold text-gray-500 transition sm:text-sm group-data-[state=active]:text-blue-950 group-data-[state=done]:text-blue-950">
                    {{ $judul }}
                </span>
            </li>
        @endforeach
    </ol>
</div>
