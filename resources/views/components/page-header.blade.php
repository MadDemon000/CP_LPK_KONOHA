<div>
    @props(['eyebrow', 'title', 'highlight' => null])

    <div data-animate="fade-up" class="text-center mb-10">
        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
            {{ $eyebrow }}
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-center text-gray-800">
            {{ $title }}
            @if ($highlight)
                <span class="text-red-700">{{ $highlight }}</span>
            @endif
        </h1>
        <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>

        @if ($slot->isNotEmpty())
            <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed mt-6">
                {{ $slot }}
            </p>
        @endif
    </div>
</div>
