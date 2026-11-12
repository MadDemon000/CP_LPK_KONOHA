@extends('layout')

@section('title', 'LPK Konoha')
@section('content')
    {{-- HERO SECTION --}}
    <section class="hero-section relative flex items-start bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/img/background.jpg') }}')">

        <div class="absolute inset-0 bg-white/15"></div>

        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-10 pt-16 pb-12">

            <div class="hero-content">

                <h1 class="text-3xl md:text-[42px] font-extrabold leading-tight text-[#142344] mb-5">
                    Raih Masa Depan
                    <span class="block">Cemerlang dan Berkarir</span>
                    <span class="block text-[#c82036]">di Jepang.</span>
                </h1>

                <p class="text-base md:text-[20px] text-[#142344] font-medium leading-relaxed mb-8 max-w-3xl">
                    Program pelatihan bahasa dan keterampilan bersertifikat resmi
                    dengan penempatan kerja langsung ke perusahaan mitra di Jepang.
                </p>

                <div class="flex flex-wrap items-center gap-4">

                    <a href="https://wa.me/6285890498591"
                        class="inline-flex items-center gap-3 bg-[#c82036] hover:bg-[#a7192c] text-white text-[15px] font-semibold px-6 py-3.5 rounded-full shadow-md transition">

                        <svg class="w-7 h-7 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.04 2a9.9 9.9 0 0 0-8.5 15l-1.3 4.7 4.8-1.25A10 10 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-2.87.75.77-2.8-.2-.3A8.2 8.2 0 1 1 12.04 20.2Zm4.5-6.15c-.25-.12-1.47-.73-1.7-.81-.23-.08-.4-.12-.56.12-.17.25-.65.81-.8.98-.15.16-.3.18-.56.06-.25-.12-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.16-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.73 2.64 4.2 3.7.59.26 1.05.42 1.41.54.59.19 1.12.16 1.54.1.47-.07 1.47-.6 1.68-1.18.2-.58.2-1.08.14-1.18-.06-.1-.23-.16-.48-.29Z" />
                        </svg>

                        Daftar Sekarang
                    </a>

                </div>
            </div>
        </div>
    </section>


    {{-- SECTION TENTANG LPK KONOHA --}}
    <section class="w-full bg-white py-12 md:py-16">

        <div class="max-w-7xl mx-auto px-6 md:px-10">

            {{-- DESKRIPSI UTAMA --}}
            <div class="bg-[#e9edeb] rounded-lg px-6 md:px-16 py-10 md:py-14 mb-12">

                <p class="max-w-240 mx-auto text-[#142343] text-base md:text-[19px] leading-relaxed text-justify">

                    LPK KONOHA merupakan Lembaga Pelatihan Kerja yang berkomitmen
                    dalam mempersiapkan, melatih, dan membimbing generasi muda
                    Indonesia agar memiliki keterampilan, pengetahuan, serta
                    kemampuan bahasa yang kompeten untuk menghadapi dunia kerja,
                    khususnya melalui peluang kerja dan program pemagangan di Jepang.

                </p>

            </div>


            {{-- GALERI DAN INFORMASI --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-7 items-start">

                {{-- GALERI FOTO --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">

                    <img src="{{ asset('assets/img/magang2.jpeg') }}" alt="Kegiatan pelatihan kerja"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                    <img src="{{ asset('assets/img/magang8.jpeg') }}" alt="Peserta magang di Jepang"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                    <img src="{{ asset('assets/img/mitra6.jpeg') }}" alt="Kegiatan pembelajaran"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                    <img src="{{ asset('assets/img/otw5.jpeg') }}" alt="Kegiatan bersama peserta"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                    <img src="{{ asset('assets/img/rekrut4.jpeg') }}" alt="Kegiatan pertemuan"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                    <img src="{{ asset('assets/img/rekrut8.jpeg') }}" alt="Kegiatan peserta magang"
                        class="w-full h-48 object-cover object-center rounded-md hover:scale-[1.03] transition duration-300">

                </div>


                {{-- INFORMASI LPK --}}
                <div class="text-[#142344] text-base md:text-[18px] leading-[1.7] text-justify">

                    <p class="mb-6">
                        Sebagai lembaga pelatihan kerja, LPK KONOHA berfokus pada
                        pengembangan kualitas sumber daya manusia melalui program
                        pelatihan bahasa Jepang, pembentukan karakter, serta
                        peningkatan keterampilan kerja. Kami berupaya memberikan
                        pembekalan terbaik agar setiap peserta siap menghadapi
                        lingkungan kerja dan budaya di Jepang.
                    </p>

                    <p>
                        Dengan semangat untuk menciptakan generasi yang mandiri,
                        disiplin, dan profesional, LPK KONOHA terus berupaya
                        memberikan layanan pelatihan yang berkualitas. Kami percaya
                        bahwa setiap peserta memiliki kesempatan untuk berkembang,
                        meraih pengalaman internasional, dan membangun masa depan
                        yang lebih baik.
                    </p>


                    {{-- TOMBOL PROFIL KAMI --}}
                    <div class="mt-8">

                        <a href="#"
                            class="inline-flex items-center justify-center bg-[#FFD21F] hover:bg-[#e6bb12] text-[#142344] text-[15px] font-semibold px-6 py-3 rounded-lg border-2 border-[#FFD21F] transition duration-300">

                            Profil Kami

                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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
            <div class="text-center mb-8">

                <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                    Jangkauan Kami
                </span>

                <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                    Lokasi Peserta Magang di Jepang
                </h2>

                <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>

                <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed mt-6">
                    Peserta program LPK KONOHA memiliki kesempatan untuk
                    mengenal lingkungan kerja dan budaya Jepang di berbagai
                    prefektur. Berikut merupakan gambaran persebaran lokasi
                    peserta magang di Jepang.
                </p>

            </div>


            {{-- GAMBAR PETA JEPANG --}}
            <div class="map-image-container w-250 mx-auto overflow-hidden rounded-xl shadow-md">

                <img src="{{ asset('assets/img/peta.webp') }}" alt="Peta lokasi peserta magang LPK KONOHA di Jepang"
                    class="w-full h-auto object-contain">

            </div>

        </div>

    </section>


    {{-- SECTION PENCAPAIAN DAN PENGHARGAAN --}}
    <section class="w-full bg-white pb-20 md:pb-28">

        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_1fr_1.7fr] gap-10 lg:gap-12 items-start">

                {{-- PENGHARGAAN 1 --}}
                <div class="text-center">

                    <div class="award-image-container flex items-center justify-center">
                        <img src="{{ asset('assets/img/piala.jpg') }}" alt="Pelatihan Vokasi Award 2021"
                            class="max-h-full w-auto object-contain">
                    </div>

                    <p class="text-sm text-[#142344] mt-10">Pelatihan Vokasi Award</p>
                    <p class="text-sm text-[#142344] mt-3">2021</p>

                    <h3 class="text-lg font-medium text-[#142344] leading-snug mt-6">
                        Juara II Penyelenggara<br>Pemagangan Luar Negeri
                    </h3>

                </div>


                {{-- PENGHARGAAN 2 --}}
                <div class="text-center">

                    <div class="award-image-container flex items-center justify-center">
                        <img src="{{ asset('assets/img/piagam.webp') }}" alt="Peringkat III Lembaga Pelatihan Kerja 2024"
                            class="max-h-full w-auto object-contain">
                    </div>

                    <p class="text-sm text-[#142344] mt-10">SO Kategori Excellent</p>
                    <p class="text-sm text-[#142344] mt-3">2024</p>

                    <h3 class="text-lg font-medium text-[#142344] leading-snug mt-6">
                        Peringkat III Lembaga<br>Pelatihan Kerja
                    </h3>

                </div>


                {{-- DESKRIPSI --}}
                <div class="md:col-span-2 lg:col-span-1">

                    <h2 class="text-3xl md:text-[34px] font-medium text-[#222] leading-tight mb-6">
                        Pencapaian <span class="text-[#c82036]">dan</span> Penghargaan
                    </h2>

                    <p class="text-[#142344] text-base md:text-[17px] leading-[1.9] text-justify">
                        Berbagai penghargaan yang kami raih merupakan bukti bahwa
                        LPK KONOHA berkomitmen penuh dalam mencetak generasi muda
                        Indonesia yang unggul, terampil dan berdaya saing global.
                    </p>

                </div>

            </div>

        </div>

    </section>
@endsection
