<div class="hidden mt-8" id="{{ $name }}" role="tabpanel" aria-labelledby="{{ $name }}-tab">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4" data-gallery>
        @foreach ($fotos as $foto)
            {{-- Wrapper terpisah untuk data-animate supaya animasinya tidak bentrok dengan efek hover tombol.
                 onerror: kalau file foto tidak ada, seluruh kartu dibuang (tidak ada gambar rusak / sel kosong). --}}
            <div data-animate="zoom-in" data-gallery-card>
                <button type="button" data-lightbox-item data-src="{{ $foto }}"
                    class="group/foto block w-full overflow-hidden rounded-lg shadow-md cursor-zoom-in
                           transition duration-300 ease-out motion-reduce:transition-none
                           hover:-translate-y-2 hover:shadow-xl
                           focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-950">
                    <img src="{{ $foto }}" alt="{{ $alt ?: 'Foto ' . $name }} {{ $loop->iteration }}"
                        loading="lazy" onerror="this.closest('[data-gallery-card]')?.remove()"
                        class="h-48 w-full object-cover transition duration-500 group-hover/foto:scale-105">
                </button>
            </div>
        @endforeach
    </div>
</div>
