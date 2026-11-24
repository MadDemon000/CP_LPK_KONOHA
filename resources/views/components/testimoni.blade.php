<div>
    @props(['items' => null])

    @php
        $defaultTestimoni = collect([
            ['nama' => 'Rusdi Amba', 'umur' => 23, 'foto' => 'assets/img/tes1.webp', 'rating' => 5],
            ['nama' => 'Arata Naoko', 'umur' => 25, 'foto' => 'assets/img/tes2.webp', 'rating' => 5],
            ['nama' => 'Reza Auditore', 'umur' => 22, 'foto' => 'assets/img/tes3.webp', 'rating' => 5],
            ['nama' => 'Ladesha Antonia', 'umur' => 24, 'foto' => 'assets/img/tes4.webp', 'rating' => 5],
        ])->map(function ($item, $index) {
            return [
                ...$item,
                'asal' => __("messages.testimoni.items.$index.asal"),
                'bidang' => __("messages.testimoni.items.$index.bidang"),
                'lokasi' => __("messages.testimoni.items.$index.lokasi"),
                'angkatan' => __("messages.testimoni.items.$index.angkatan"),
                'kutipan' => __("messages.testimoni.items.$index.kutipan"),
            ];
        })->all();

        $testimoni = $items ?? $defaultTestimoni;

        $utama = $testimoni[0];
        $lainnya = array_slice($testimoni, 1);

        $inisial = fn($nama) => collect(explode(' ', $nama))->take(2)->map(fn($k) => mb_substr($k, 0, 1))->implode('');
    @endphp

    <section class="w-full bg-white pb-20 md:pb-28">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            {{-- JUDUL SECTION --}}
            <div data-animate="fade-up" class="text-center mb-10">
                <span class="text-sm font-semibold tracking-[3px] uppercase text-[#c82036]">
                    {{ __('messages.testimoni.eyebrow') }}
                </span>

                <h2 class="mt-2 text-2xl md:text-3xl font-bold text-[#142344]">
                    {{ __('messages.testimoni.judul') }} <span class="text-[#c82036]">{{ __('messages.testimoni.sorot') }}</span>
                </h2>

                <div class="w-16 h-1 mx-auto mt-4 bg-[#FFD21F] rounded-full"></div>

                <p class="max-w-3xl mx-auto mt-6 text-sm md:text-base leading-relaxed text-gray-600">
                    {{ __('messages.testimoni.deskripsi') }}
                </p>
            </div>

            {{-- TESTIMONI UTAMA --}}
            <div data-animate="zoom-in" class="relative overflow-hidden rounded-2xl bg-[#142344] text-white shadow-lg">

                {{-- dekorasi, sama seperti footer --}}
                <div
                    class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full bg-[#c82036]/20 blur-3xl">
                </div>
                <div
                    class="pointer-events-none absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-[#FFD21F]/10 blur-3xl">
                </div>

                {{-- tanda kutip besar --}}
                <svg class="pointer-events-none absolute right-6 top-6 h-20 w-20 text-white/10 md:h-28 md:w-28"
                    fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M9.5 5C6.46 5 4 7.46 4 10.5V19h7v-7H7.5c0-1.65 1.35-3 3-3V5h-1Zm9 0C15.46 5 13 7.46 13 10.5V19h7v-7h-3.5c0-1.65 1.35-3 3-3V5h-1Z" />
                </svg>

                <div class="relative grid items-center gap-8 p-8 md:p-12 lg:grid-cols-[auto_1fr] lg:gap-12">

                    {{-- FOTO --}}
                    <div class="mx-auto text-center lg:mx-0">
                        <div
                            class="relative mx-auto size-36 overflow-hidden rounded-full border-4 border-[#FFD21F] bg-[#c82036] shadow-xl md:size-44">
                            <span
                                class="absolute inset-0 flex items-center justify-center text-4xl font-bold text-white">
                                {{ $inisial($utama['nama']) }}
                            </span>
                            <img src="{{ $utama['foto'] }}" alt="{{ __('messages.testimoni.photo_alt', ['nama' => $utama['nama']]) }}" loading="lazy"
                                onerror="this.remove()" class="absolute inset-0 h-full w-full object-cover">
                        </div>

                        <span
                            class="mt-5 inline-block rounded-full border border-[#F4C7D0]/60 bg-white/10 px-4 py-1 text-xs font-semibold text-[#f5a8b7]">
                            {{ $utama['angkatan'] }}
                        </span>
                    </div>

                    {{-- ISI --}}
                    <div>
                        <div class="mb-4 flex gap-1 text-[#FFD21F]" role="img"
                            aria-label="{{ __('messages.testimoni.rating_label', ['rating' => $utama['rating']]) }}">
                            @for ($i = 0; $i < $utama['rating']; $i++)
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path
                                        d="M10 15.27 16.18 19l-1.64-7.03L20 7.24l-7.19-.61L10 0 7.19 6.63 0 7.24l5.46 4.73L3.82 19 10 15.27Z" />
                                </svg>
                            @endfor
                        </div>

                        <blockquote class="text-base leading-relaxed text-gray-100 md:text-xl md:leading-9">
                            “{{ $utama['kutipan'] }}”
                        </blockquote>

                        <div class="mt-6 border-t border-white/15 pt-5">
                            <p class="text-lg font-bold">{{ $utama['nama'] }}</p>
                            <p class="mt-1 text-sm text-gray-300">
                                {{ $utama['bidang'] }} &middot; {{ $utama['lokasi'] }}
                            </p>
                            <p class="text-xs text-gray-400">
                                {{ __('messages.testimoni.meta_info', ['umur' => $utama['umur'], 'asal' => $utama['asal']]) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TESTIMONI LAINNYA --}}
            <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($lainnya as $t)
                    <figure data-animate="fade-up" data-delay="{{ $loop->index * 150 }}"
                        class="group flex h-full flex-col rounded-2xl border border-gray-200 bg-white p-6 shadow-md
                           transition duration-300 hover:-translate-y-2 hover:border-[#F4C7D0] hover:shadow-xl
                           motion-reduce:transition-none">

                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex gap-0.5 text-[#FFD21F]" role="img"
                                aria-label="{{ __('messages.testimoni.rating_label', ['rating' => $t['rating']]) }}">
                                @for ($i = 0; $i < $t['rating']; $i++)
                                    <svg class="size-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path
                                            d="M10 15.27 16.18 19l-1.64-7.03L20 7.24l-7.19-.61L10 0 7.19 6.63 0 7.24l5.46 4.73L3.82 19 10 15.27Z" />
                                    </svg>
                                @endfor
                            </div>

                            <svg class="size-8 text-[#c82036]/20 transition group-hover:text-[#c82036]/50"
                                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M9.5 5C6.46 5 4 7.46 4 10.5V19h7v-7H7.5c0-1.65 1.35-3 3-3V5h-1Zm9 0C15.46 5 13 7.46 13 10.5V19h7v-7h-3.5c0-1.65 1.35-3 3-3V5h-1Z" />
                            </svg>
                        </div>

                        <blockquote class="flex-1 text-sm leading-[1.8] text-justify text-[#142344] md:text-base">
                            “{{ $t['kutipan'] }}”
                        </blockquote>

                        <figcaption class="mt-6 flex items-center gap-4 border-t border-gray-100 pt-5">
                            <div
                                class="relative size-14 shrink-0 overflow-hidden rounded-full border-2 border-[#FFD21F] bg-[#142344]">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-sm font-bold text-white">
                                    {{ $inisial($t['nama']) }}
                                </span>
                                <img src="{{ $t['foto'] }}" alt="{{ __('messages.testimoni.photo_alt', ['nama' => $t['nama']]) }}" loading="lazy"
                                    onerror="this.remove()" class="absolute inset-0 h-full w-full object-cover">
                            </div>

                            <div class="min-w-0">
                                <p class="truncate font-bold text-[#142344]">{{ $t['nama'] }}</p>
                                <p class="truncate text-xs text-gray-500">{{ $t['bidang'] }}</p>
                                <p class="truncate text-xs text-[#c82036]">{{ $t['lokasi'] }} &middot;
                                    {{ $t['angkatan'] }}</p>
                            </div>
                        </figcaption>
                    </figure>
                @endforeach
            </div>

            {{-- AJAKAN DAFTAR --}}
            <div data-animate="fade-up"
                class="mt-10 flex flex-col items-center justify-between gap-5 rounded-2xl bg-[#e9edeb] px-6 py-8 text-center md:flex-row md:px-12 md:text-left">
                <p class="text-lg font-bold text-[#142344] md:text-xl">{{ __('messages.testimoni.cta_judul') }}</p>

                <a href="{{ route('daftar') }}"
                    class="inline-flex items-center gap-2 whitespace-nowrap rounded-full border-2 border-[#F4C7D0] bg-[#c82036] px-6 py-3.5 text-[15px] font-semibold text-white shadow-md transition hover:bg-[#a7192c]">
                    {{ __('messages.testimoni.cta_teks') }}
                    <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m10 16 4-4-4-4" />
                    </svg>
                </a>
            </div>

        </div>
    </section>
</div>