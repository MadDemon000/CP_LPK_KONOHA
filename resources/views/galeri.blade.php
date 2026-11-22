@extends('layout')

@section('title', __('messages.gallery'))
@section('content')

    @php
        // Satu sumber data untuk tombol tab DAN foto.
        // Nama file: {prefix}1.webp ... {prefix}{jumlah}.webp di public/assets/img
        $tabs = collect([
            [
                'name' => 'rekrutmen',
                'label' => __('messages.gallery_recruitment'),
                'alt' => __('messages.gallery_recruitment_alt'),
                'icon' => 'i1.svg',
                'prefix' => 'rekrut',
                'jumlah' => 9,
            ],
            [
                'name' => 'belajar',
                'label' => __('messages.gallery_learning'),
                'alt' => __('messages.gallery_learning_alt'),
                'icon' => 'i2.svg',
                'prefix' => 'belajar',
                'jumlah' => 9,
            ],
            [
                'name' => 'keberangkatan',
                'label' => __('messages.gallery_departure'),
                'alt' => __('messages.gallery_departure_alt'),
                'icon' => 'i3.svg',
                'prefix' => 'otw',
                'jumlah' => 9,
            ],
            [
                'name' => 'magang',
                'label' => __('messages.gallery_internship'),
                'alt' => __('messages.gallery_internship_alt'),
                'icon' => 'i4.svg',
                'prefix' => 'magang',
                'jumlah' => 9,
            ],
            [
                'name' => 'mitra',
                'label' => __('messages.gallery_partners'),
                'alt' => __('messages.gallery_partners_alt'),
                'icon' => 'i5.svg',
                'prefix' => 'mitra',
                'jumlah' => 9,
            ],
        ])->map(function ($t) {
            $t['fotos'] = collect(range(1, $t['jumlah']))
                ->map(fn($i) => asset("assets/img/{$t['prefix']}{$i}.webp"))
                ->all();
            return $t;
        });
    @endphp

    <section class="max-w-7xl mx-auto px-4 pt-28 sm:pt-32 pb-12">

        <div data-animate="fade-up" class="text-center mb-8">
            <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                {{ __('messages.gallery_subtitle') }}
            </span>
            <h1 class="text-5xl font-bold text-center text-gray-800">
                {{ __('messages.gallery_title') }} <span class="text-red-700">LPK Konoha</span>
            </h1>
            <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
            <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed mt-6">
                {{ __('messages.gallery_description') }}
            </p>
        </div>

        {{-- TOMBOL TAB --}}
        {{-- data-tabs-*-classes diisi kelas "dummy" supaya Flowbite tidak menambahkan
             warna bawaannya (text-blue-600 / text-gray-500) yang menimpa styling kita. --}}
        <ul id="kategori-container" role="tablist" data-tabs-toggle="#galeri-content" data-tabs-active-classes="tab-on"
            data-tabs-inactive-classes="tab-off" class="flex flex-wrap gap-3 justify-center" data-animate="fade-up">
            @foreach ($tabs as $t)
                <li role="presentation">
                    <button type="button" role="tab" id="{{ $t['name'] }}-tab"
                        data-tabs-target="#{{ $t['name'] }}" aria-controls="{{ $t['name'] }}"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                        class="group flex items-center gap-2 px-4 py-2 rounded-full border border-blue-950
                               bg-white text-blue-950 transition-all duration-300
                               hover:bg-blue-950 hover:text-white
                               aria-selected:bg-blue-950 aria-selected:text-white">
                        <img src="{{ asset('assets/img/' . $t['icon']) }}" alt=""
                            class="size-10 transition-all duration-300
                                   group-hover:brightness-0 group-hover:invert
                                   group-aria-selected:brightness-0 group-aria-selected:invert">
                        <span class="font-semibold">{{ $t['label'] }}</span>
                    </button>
                </li>
            @endforeach
        </ul>

        {{-- PANEL FOTO --}}
        <div id="galeri-content" class="mb-3">
            @foreach ($tabs as $t)
                <x-tab-galeri :name="$t['name']" :fotos="$t['fotos']" :alt="$t['alt']" />
            @endforeach
        </div>

    </section>

    {{-- LIGHTBOX (satu untuk semua tab) --}}
    <div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 p-4" role="dialog"
        aria-modal="true" aria-label="Pratinjau foto">

        <button type="button" id="lb-close" aria-label="Tutup"
            class="absolute top-4 right-4 size-11 rounded-full bg-white/10 text-white text-3xl leading-none hover:bg-white/25 transition">&times;</button>

        <button type="button" id="lb-prev" aria-label="Sebelumnya"
            class="absolute left-3 md:left-6 size-12 rounded-full bg-white/10 text-white text-3xl leading-none hover:bg-white/25 transition">&#8249;</button>

        <img id="lb-img" src="" alt=""
            class="max-h-[90vh] max-w-[90vw] object-contain rounded-lg shadow-2xl select-none">

        <button type="button" id="lb-next" aria-label="Berikutnya"
            class="absolute right-3 md:right-6 size-12 rounded-full bg-white/10 text-white text-3xl leading-none hover:bg-white/25 transition">&#8250;</button>

        <span id="lb-counter" class="absolute bottom-4 left-1/2 -translate-x-1/2 text-sm text-white/80"></span>
    </div>

@endsection

@push('scripts')
    <script>
        (() => {
            const lb = document.getElementById('lightbox');
            const img = document.getElementById('lb-img');
            const counter = document.getElementById('lb-counter');
            const btnClose = document.getElementById('lb-close');
            let items = [],
                index = 0,
                lastFocus = null;

            const isOpen = () => lb.classList.contains('flex');
            const wrap = (i) => (i + items.length) % items.length;

            const show = (i) => {
                index = wrap(i);
                img.src = items[index].dataset.src;
                counter.textContent = `${index + 1} / ${items.length}`;
                // preload foto sebelah supaya next/prev tidak berkedip
                [index - 1, index + 1].forEach((n) => {
                    new Image().src = items[wrap(n)].dataset.src;
                });
            };

            const open = (list, i) => {
                items = list;
                lastFocus = document.activeElement;
                show(i);
                lb.classList.replace('hidden', 'flex');
                document.body.classList.add('overflow-hidden');
                btnClose.focus();
            };

            const close = () => {
                lb.classList.replace('flex', 'hidden');
                document.body.classList.remove('overflow-hidden');
                img.removeAttribute('src');
                lastFocus?.focus();
            };

            // Klik foto -> buka (daftar foto = foto di tab yang sama)
            document.addEventListener('click', (e) => {
                const item = e.target.closest('[data-lightbox-item]');
                if (!item) return;
                const list = [...item.closest('[data-gallery]').querySelectorAll('[data-lightbox-item]')];
                open(list, list.indexOf(item));
            });

            document.getElementById('lb-prev').addEventListener('click', () => show(index - 1));
            document.getElementById('lb-next').addEventListener('click', () => show(index + 1));
            btnClose.addEventListener('click', close);
            lb.addEventListener('click', (e) => {
                if (e.target === lb) close();
            });

            // Keyboard
            document.addEventListener('keydown', (e) => {
                if (!isOpen()) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowLeft') show(index - 1);
                if (e.key === 'ArrowRight') show(index + 1);
            });

            // Swipe di HP
            let startX = 0;
            lb.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            }, {
                passive: true
            });
            lb.addEventListener('touchend', (e) => {
                const dx = e.changedTouches[0].clientX - startX;
                if (Math.abs(dx) > 50) show(dx > 0 ? index - 1 : index + 1);
            });
        })();
    </script>
@endpush
