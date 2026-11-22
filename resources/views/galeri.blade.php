@extends('layout')

@section('title', __('messages.gallery'))

@section('content')
    <section class="max-w-7xl mx-auto px-4 pt-28 sm:pt-32 pb-12">

        {{-- JUDUL --}}
        <h2 data-animate="fade-up" class="text-3xl font-bold text-center text-gray-800 mb-10">
            {{ __('messages.gallery_title') }}
            <span class="text-red-700">LPK Konoha</span>
        </h2>

        {{-- CONTAINER UTAMA --}}
        <div class="flex flex-col md:flex-row gap-6">

            {{-- KOLOM KIRI: DAFTAR TAB --}}
            <ul class="flex flex-col space-y-3 text-sm font-medium text-gray-600 md:w-1/3" id="dokumentasi-tab"
                data-tabs-toggle="#dokumentasi-tab-content" data-tabs-active-classes="bg-[#172241] text-white"
                data-tabs-inactive-classes="bg-gray-100 text-gray-700 hover:bg-[#172241] hover:text-white" role="tablist">

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="rekrutmen-tab"
                        data-tabs-target="#rekrutmen" type="button" role="tab" aria-controls="rekrutmen"
                        aria-selected="true">
                        {{ __('messages.gallery_recruitment') }}
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="belajar-tab"
                        data-tabs-target="#belajar" type="button" role="tab" aria-controls="belajar"
                        aria-selected="false">
                        {{ __('messages.gallery_learning') }}
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="keberangkatan-tab"
                        data-tabs-target="#keberangkatan" type="button" role="tab" aria-controls="keberangkatan"
                        aria-selected="false">
                        {{ __('messages.gallery_departure') }}
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="magang-tab"
                        data-tabs-target="#magang" type="button" role="tab" aria-controls="magang"
                        aria-selected="false">
                        {{ __('messages.gallery_internship') }}
                    </button>
                </li>

                <li role="presentation">
                    <button class="w-full text-left px-5 py-4 rounded-md transition" id="mitra-tab"
                        data-tabs-target="#mitra" type="button" role="tab" aria-controls="mitra" aria-selected="false">
                        {{ __('messages.gallery_partners') }}
                    </button>
                </li>

            </ul>

            {{-- KOLOM KANAN: KONTEN GALERI --}}
            <div id="dokumentasi-tab-content" class="md:w-2/3">

                {{-- 1. REKRUTMEN --}}
                <div class="hidden" id="rekrutmen" role="tabpanel" aria-labelledby="rekrutmen-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        @for ($i = 1; $i <= 9; $i++)
                            <img data-animate="zoom-in" class="h-48 w-full object-cover rounded-lg"
                                src="{{ asset('assets/img/rekrut' . $i . '.webp') }}"
                                alt="{{ __('messages.gallery_recruitment_alt') }} {{ $i }}">
                        @endfor

                    </div>
                </div>

                {{-- 2. KEGIATAN BELAJAR --}}
                <div class="hidden" id="belajar" role="tabpanel" aria-labelledby="belajar-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        @for ($i = 1; $i <= 9; $i++)
                            <img data-animate="zoom-in" class="h-48 w-full object-cover rounded-lg"
                                src="{{ asset('assets/img/belajar' . $i . '.webp') }}"
                                alt="{{ __('messages.gallery_learning_alt') }} {{ $i }}">
                        @endfor

                    </div>
                </div>

                {{-- 3. KEBERANGKATAN --}}
                <div class="hidden" id="keberangkatan" role="tabpanel" aria-labelledby="keberangkatan-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        @for ($i = 1; $i <= 9; $i++)
                            <img data-animate="zoom-in" class="h-48 w-full object-cover rounded-lg"
                                src="{{ asset('assets/img/otw' . $i . '.webp') }}"
                                alt="{{ __('messages.gallery_departure_alt') }} {{ $i }}">
                        @endfor

                    </div>
                </div>

                {{-- 4. MAGANG DI JEPANG --}}
                <div class="hidden" id="magang" role="tabpanel" aria-labelledby="magang-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        @for ($i = 1; $i <= 9; $i++)
                            <img data-animate="zoom-in" class="h-48 w-full object-cover rounded-lg"
                                src="{{ asset('assets/img/magang' . $i . '.webp') }}"
                                alt="{{ __('messages.gallery_internship_alt') }} {{ $i }}">
                        @endfor

                    </div>
                </div>

                {{-- 5. MITRA --}}
                <div class="hidden" id="mitra" role="tabpanel" aria-labelledby="mitra-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        @for ($i = 1; $i <= 9; $i++)
                            <img data-animate="zoom-in" class="h-48 w-full object-cover rounded-lg"
                                src="{{ asset('assets/img/mitra' . $i . '.webp') }}"
                                alt="{{ __('messages.gallery_partners_alt') }} {{ $i }}">
                        @endfor

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
{{-- Test Git Gui --}}