<div>
    {{-- Kartu "berhasil" di tengah layar (horizontal & vertikal) --}}
    @props(['message' => null, 'title' => 'Pendaftaran Berhasil'])

    <div class="flex min-h-[calc(100vh-6rem)] items-center justify-center">
        <div data-animate="fade-up" class="w-full max-w-xl rounded-2xl bg-white p-10 text-center shadow-lg">
            <div class="mx-auto mb-5 flex size-16 items-center justify-center rounded-full bg-[#FFD21F] text-[#172241]">
                <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">{{ $title }}</h2>
            @if ($message)
                <p class="mt-3 text-sm text-gray-600">{{ $message }}</p>
            @endif
            <a href="{{ route('beranda') }}"
                class="mt-8 inline-block rounded-full bg-[#172241] px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-900">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
