<div>
    {{-- Tombol Kembali / Lanjut / Kirim. Tampil-sembunyinya diatur oleh pendaftaran-wizard.js --}}
    @props(['submitLabel' => 'Kirim Pendaftaran'])

    <div class="mt-8 flex items-center justify-between gap-3 border-t border-gray-100 pt-6">
        <button type="button" id="btn-prev"
            class="invisible rounded-full border border-blue-950 px-6 py-2.5 text-sm font-semibold text-blue-950 transition hover:bg-blue-950 hover:text-white">
            Kembali
        </button>

        <button type="button" id="btn-next"
            class="rounded-full bg-[#172241] px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-900">
            Lanjut
        </button>

        <button type="submit" id="btn-submit"
            class="hidden rounded-full bg-[#FFD21F] px-6 py-2.5 text-sm font-bold text-[#172241] transition hover:brightness-95">
            {{ $submitLabel }}
        </button>
    </div>
</div>
