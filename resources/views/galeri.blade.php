@extends('layout')

@section('content')
    <section class="max-w-7xl mx-auto px-4 py-12 mt-40">
        <!-- Judul -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">
            Dokumentasi <span class="text-red-700">LPK Konoha</span>
        </h2>

        <!-- Container Utama: Kiri Tab, Kanan Konten Galeri -->
        <div class="flex flex-col md:flex-row gap-6">

            <!-- KOLOM KIRI: Daftar Tab Vertikal -->
            <ul class="flex flex-col space-y-3 text-sm font-medium text-gray-600 md:w-1/3" id="dokumentasi-tab"
                data-tabs-toggle="#dokumentasi-tab-content" data-tabs-active-classes="bg-[#172241] text-white"
                data-tabs-inactive-classes="bg-gray-100 text-gray-700 hover:bg-[#172241] hover:text-white" role="tablist">

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="rekrutmen-tab"
                        data-tabs-target="#rekrutmen" type="button" role="tab" aria-controls="rekrutmen"
                        aria-selected="true">
                        Kegiatan Rekrutmen LPK Konoha
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="belajar-tab"
                        data-tabs-target="#belajar" type="button" role="tab" aria-controls="belajar"
                        aria-selected="false">
                        Kegiatan Belajar di LPK Konoha
                    </button>
                </li>

                <!-- Tab Aktif Default (aria-selected="true") -->
                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="keberangkatan-tab"
                        data-tabs-target="#keberangkatan" type="button" role="tab" aria-controls="keberangkatan"
                        aria-selected="false">
                        Keberangkatan Peserta Magang ke Jepang
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="magang-tab"
                        data-tabs-target="#magang" type="button" role="tab" aria-controls="magang"
                        aria-selected="false">
                        Peserta Magang di Jepang
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="mitra-tab"
                        data-tabs-target="#mitra" type="button" role="tab" aria-controls="mitra" aria-selected="false">
                        LPK Konoha bersama Mitra
                    </button>
                </li>
            </ul>

            <!-- KOLOM KANAN: Konten Galeri Sesuai Tab -->
            <div id="dokumentasi-tab-content" class="md:w-2/3">

                <!-- 1. Konten Rekrutmen -->
                <div class="hidden" id="rekrutmen" role="tabpanel" aria-labelledby="rekrutmen-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut1.webp') }}"
                            alt="Rekrutmen 1">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut2.webp') }}"
                            alt="Rekrutmen 2">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut3.webp') }}"
                            alt="Rekrutmen 3">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut4.webp') }}"
                            alt="Rekrutmen 4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut5.webp') }}"
                            alt="Rekrutmen 5">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut6.webp') }}"
                            alt="Rekrutmen 6">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut7.webp') }}"
                            alt="Rekrutmen 7">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut8.webp') }}"
                            alt="Rekrutmen 8">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/rekrut9.webp') }}"
                            alt="Rekrutmen 9">
                    </div>
                </div>

                <!-- 2. Konten Belajar -->
                <div class="hidden" id="belajar" role="tabpanel" aria-labelledby="belajar-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar1.webp') }}"
                            alt="Belajar 1">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar2.webp') }}"
                            alt="Belajar 2">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar3.webp') }}"
                            alt="Belajar 3">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar4.webp') }}"
                            alt="Belajar 4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar5.webp') }}"
                            alt="Belajar 5">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar6.webp') }}"
                            alt="Belajar 6">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar7.webp') }}"
                            alt="Belajar 7">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar8.webp') }}"
                            alt="Belajar 8">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/belajar9.webp') }}"
                            alt="Belajar 9">
                    </div>
                </div>

                <!-- 3. Konten Keberangkatan (Aktif Pertama Kali) -->
                <div class="hidden" id="keberangkatan" role="tabpanel" aria-labelledby="keberangkatan-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw1.webp') }}"
                            alt="Keberangkatan 1">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw2.webp') }}"
                            alt="Keberangkatan 2">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw3.webp') }}"
                            alt="Keberangkatan 3">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw4.webp') }}"
                            alt="Keberangkatan 4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw5.webp') }}"
                            alt="Keberangkatan 5">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw6.webp') }}"
                            alt="Keberangkatan 6">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw7.webp') }}"
                            alt="Keberangkatan 7">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw8.webp') }}"
                            alt="Keberangkatan 8">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/otw9.webp') }}"
                            alt="Keberangkatan 9">
                    </div>
                </div>

                <!-- 4. Konten Magang di Jepang -->
                <div class="hidden" id="magang" role="tabpanel" aria-labelledby="magang-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang1.webp') }}"
                            alt="Magang 1">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang2.webp') }}"
                            alt="Magang 2">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang3.webp') }}"
                            alt="Magang 3">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang4.webp') }}"
                            alt="Magang 4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang5.webp') }}"
                            alt="Magang 5">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang6.webp') }}"
                            alt="Magang 6">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang7.webp') }}"
                            alt="Magang 7">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang8.webp') }}"
                            alt="Magang 8">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/magang9.webp') }}"
                            alt="Magang 9">
                    </div>
                </div>

                <!-- 5. Konten Mitra -->
                <div class="hidden" id="mitra" role="tabpanel" aria-labelledby="mitra-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra1.webp') }}"
                            alt="Mitra 1">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra2.webp') }}"
                            alt="Mitra 2">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra3.webp') }}"
                            alt="Mitra 3">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra4.webp') }}"
                            alt="Mitra 4">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra5.webp') }}"
                            alt="Mitra 5">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra6.webp') }}"
                            alt="Mitra 6">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra7.webp') }}"
                            alt="Mitra 7">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra8.webp') }}"
                            alt="Mitra 8">
                        <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('assets/img/mitra9.webp') }}"
                            alt="Mitra 9">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
