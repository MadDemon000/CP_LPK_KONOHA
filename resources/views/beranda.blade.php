@extends('layout')

@section('title', 'LPK Konoha')
@section('content')
    {{-- HERO SECTION --}}
    <section
        class="hero-section relative flex items-center justify-center min-h-120 md:min-h-140 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/img/background.jpg') }}')">

        <div class="absolute inset-0 bg-white/60"></div>

        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-10 py-16 md:py-24">
            <div class="hero-content max-w-4xl mx-auto text-center">

                <h1 data-animate="fade-up" class="mb-5 text-3xl md:text-[42px] font-extrabold leading-tight text-[#142344]">
                    {{ __('messages.hero_title_1') }}
                    <span class="block">{{ __('messages.hero_title_2') }}</span>
                    <span class="block text-[#c82036]">{{ __('messages.hero_title_3') }}</span>
                </h1>

                <p data-animate="fade-up" data-delay="200"
                    class="max-w-3xl mx-auto text-base md:text-xl font-medium leading-relaxed text-[#142344]">
                    {{ __('messages.hero_description') }}
                </p>


            </div>
        </div>
    </section>


    {{-- SECTION TENTANG LPK KONOHA --}}
    <section class="w-full bg-white py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            {{-- DESKRIPSI UTAMA --}}
            <div data-animate="zoom-in" class="mb-12 px-6 md:px-16 py-10 md:py-14 bg-[#e9edeb] rounded-lg">
                <p class="max-w-240 mx-auto text-base md:text-[19px] leading-relaxed text-justify text-[#142343]">
                    {{ __('messages.about_description') }}
                </p>
            </div>

            {{-- GALERI DAN INFORMASI --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-7 items-start">

                {{-- GALERI FOTO --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @php
                        $gallery = [
                            ['magang2.jpeg', __('messages.training_activity')],
                            ['magang8.jpeg', __('messages.internship_participants')],
                            ['mitra6.jpeg', __('messages.learning_activity')],
                            ['otw5.jpeg', __('messages.participant_activity')],
                            ['rekrut4.jpeg', __('messages.meeting_activity')],
                            ['rekrut8.jpeg', __('messages.internship_activity')],
                        ];
                    @endphp

                    @foreach ($gallery as [$file, $alt])
                        <div data-animate="zoom-in" data-delay="{{ $loop->index * 100 }}"
                            class="overflow-hidden rounded-lg">
                            <img src="{{ asset('assets/img/' . $file) }}" alt="{{ $alt }}" loading="lazy"
                                class="w-full h-48 object-cover object-center hover:scale-[1.05] transition duration-300">
                        </div>
                    @endforeach
                </div>

                {{-- INFORMASI LPK --}}
                <div data-animate="fade-up" data-delay="200"
                    class="text-base md:text-lg leading-[1.7] text-justify text-[#142344]">
                    <p class="mb-6">
                        {{ __('messages.about_paragraph_1') }}
                    </p>

                    <p>
                        {{ __('messages.about_paragraph_2') }}
                    </p>

                    {{-- TOMBOL PROFIL KAMI --}}
                    <div class="mt-8">
                        <a href="{{ route('tentang-kami') }}"
                            class="inline-flex items-center px-5 py-3 text-sm font-semibold text-center text-[#142344] bg-[#FFD21F] rounded-lg hover:bg-[#e6bb12] focus:ring-4 focus:outline-none focus:ring-yellow-200">
                            {{ __('messages.our_profile') }}
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- SECTION LOKASI PESERTA MAGANG --}}
    <section class="w-full bg-white pt-10 pb-20 md:pt-12 md:pb-28">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            {{-- JUDUL SECTION --}}
            <div data-animate="fade-up" class="text-center mb-8">
                <span class="text-sm font-semibold tracking-[3px] uppercase text-[#c82036]">
                    {{ __('messages.our_reach') }}
                </span>

                <h2 class="mt-2 text-2xl md:text-3xl font-bold text-[#142344]">
                    {{ __('messages.internship_locations') }}
                </h2>

                <div class="w-16 h-1 mx-auto mt-4 bg-[#FFD21F] rounded-full"></div>

                <p class="max-w-3xl mx-auto mt-6 text-sm md:text-base leading-relaxed text-gray-600">
                    {{ __('messages.location_description') }}
                </p>
            </div>

            {{-- GAMBAR PETA JEPANG --}}
            <div data-animate="zoom-in"
                class="map-image-container w-full max-w-250 mx-auto overflow-hidden rounded-xl shadow-md">
                <img src="{{ asset('assets/img/peta.webp') }}" alt="alt="{{ __('messages.map_alt') }}""
                    class="w-full h-auto object-contain">
            </div>

        </div>
    </section>


    {{-- SECTION PENCAPAIAN DAN PENGHARGAAN --}}
    <section class="w-full bg-white pb-20 md:pb-28">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_1fr_1.7fr] gap-10 lg:gap-12 items-start">

                {{-- PENGHARGAAN 1 --}}
                <div data-animate="fade-up" class="text-center">
                    <div class="award-image-container flex items-center justify-center">
                        <img src="{{ asset('assets/img/piala.jpg') }}" alt="Pelatihan Vokasi Award 2021"
                            class="max-h-full w-auto object-contain">
                    </div>

                    <p class="mt-10 text-sm text-[#142344]">{{ __('messages.award_2021') }}</p>
                    <p class="mt-3 text-sm text-[#142344]">2021</p>

                    <h3 class="mt-6 text-lg font-medium leading-snug text-[#142344]">
                        {{ __('messages.award_2021_title') }}
                    </h3>
                </div>

                {{-- PENGHARGAAN 2 --}}
                <div data-animate="fade-up" data-delay="150" class="text-center">
                    <div class="award-image-container flex items-center justify-center">
                        <img src="{{ asset('assets/img/piagam.webp') }}" alt="Peringkat III Lembaga Pelatihan Kerja 2024"
                            class="max-h-full w-auto object-contain">
                    </div>

                    <p class="mt-10 text-sm text-[#142344]">{{ __('messages.award_2024_category') }}</p>
                    <p class="mt-3 text-sm text-[#142344]">2024</p>

                    <h3 class="mt-6 text-lg font-medium leading-snug text-[#142344]">
                        {{ __('messages.award_2024_title') }}
                    </h3>
                </div>

                {{-- DESKRIPSI --}}
                <div data-animate="fade-up" data-delay="300" class="md:col-span-2 lg:col-span-1">
                    <h2 class="mb-6 text-3xl md:text-[34px] font-medium leading-tight text-[#222]">
                        {{ __('messages.achievements') }}
                        <span class="text-[#c82036]">{{ __('messages.and') }}</span>
                        {{ __('messages.awards') }}
                    </h2>

                    <p class="text-base md:text-[17px] leading-[1.9] text-justify text-[#142344]">
                        {{ __('messages.achievement_description') }}
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
