@extends('layout')

@section('title', 'Tentang Kami')
@section('content')
    <div>
        {{-- HERO / HEADER & MOTTO LPK --}}
        <section class="w-full bg-[#142344] text-white py-16 md:py-20 relative overflow-hidden"
            style="background-image: url('{{ asset('assets/img/background.jpg') }}'); background-position: center;">
            <div class="max-w-7xl mx-auto px-6 md:px-10 text-center relative z-10">
                <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                    Profil Lembaga
                </span>
                <h1 class="text-3xl md:text-5xl font-extrabold mt-3 mb-5 leading-tight text-[#142344]">
                    Tentang <span class="text-[#c82036]">LPK Konoha</span>
                </h1>
                <p class="text-[#142344] max-w-3xl mx-auto text-base md:text-lg leading-relaxed mb-10">
                    Lembaga Pelatihan Kerja resmi yang berkomitmen mencetak generasi muda Indonesia yang kompeten,
                    berkarakter kuat, dan siap berkarir di perusahaan mitra di Jepang.
                </p>

                {{-- MOTTO LPK --}}
                <div class="">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        Motto LPK Konoha
                    </span>
                    <p class="text-xl md:text-2xl font-bold italic text-[#161615]">
                        "Disiplin, Terampil, Mandiri, dan Berdaya Saing Global"
                    </p>
                </div>
            </div>
        </section>

        {{-- VISI & MISI --}}
        <section class="w-full bg-white py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        Arah & Tujuan
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        Visi <span class="text-[#c82036]">&</span> Misi
                    </h2>
                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- VISI --}}
                    <div class="bg-white p-8 md:p-10 rounded-xl border-l-4 border-[#c82036]">
                        <span
                            class="inline-block bg-[#142344] text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                            Visi Kami
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-[#142344] mb-4">
                            Menjadi LPK Terdepan & Terpercaya
                        </h3>
                        <p class="text-[#142344] text-base leading-relaxed text-justify">
                            Menjadi Lembaga Pelatihan Kerja terdepan dan terpercaya dalam menghasilkan sumber daya manusia
                            profesional yang kompeten, berintegritas tinggi, serta mampu beradaptasi dengan standar kerja
                            dan budaya industri di Jepang maupun tingkat global.
                        </p>
                    </div>

                    {{-- MISI --}}
                    <div
                        class="bg-white p-8 md:p-10 rounded-xl border border-gray-200 shadow-sm border-l-4 border-l-[#FFD21F]">
                        <span
                            class="inline-block bg-[#FFD21F] text-[#142344] text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                            Misi Kami
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-[#142344] mb-4">
                            Komitmen Pembinaan Kualitas
                        </h3>
                        <ul class="space-y-3 text-gray-700 text-base leading-relaxed">
                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>Menyelenggarakan pelatihan bahasa Jepang dan keterampilan berbasis kompetensi sesuai
                                    kebutuhan perusahaan mitra.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>Membentuk etos kerja, kedisiplinan (budaya 5S), dan karakter tangguh pada setiap
                                    peserta didik.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>Memperluas jejaring kemitraan strategis dengan Sending Organization (SO) dan
                                    perusahaan penerima di Jepang.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>Menyediakan fasilitas asrama, ruang belajar modern, serta instruktur berpengalaman
                                    eks-Jepang.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- SISTEM PELATIHAN --}}
        <section class="w-full bg-[#e9edeb] py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        Metode Pembelajaran
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        Sistem Pelatihan Terpadu
                    </h2>
                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                    <p class="max-w-2xl mx-auto text-gray-700 text-sm md:text-base mt-5">
                        Kurikulum dirancang secara sistematis untuk memastikan setiap peserta lulus kualifikasi bahasa,
                        fisik, dan mental sebelum keberangkatan.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#142344]">
                        <span class="text-3xl font-extrabold text-[#c82036]">01</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">Bahasa & Budaya Jepang</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Pembelajaran intensif tata bahasa, percakapan (Kaiwa), Kanji, dan tata krama Jepang hingga
                            setara JLPT N4 / JFT-Basic A2.
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#c82036]">
                        <span class="text-3xl font-extrabold text-[#c82036]">02</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">Pembinaan Fisik & Mental</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Latihan kebugaran jasmani rutin, kedisiplinan waktu, serta penerapan prinsip kerja Jepang
                            (Seiri, Seiton, Seiso, Seiketsu, Shitsuke).
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#FFD21F]">
                        <span class="text-3xl font-extrabold text-[#c82036]">03</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">Keterampilan Kejuruan</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Praktik teknis bidang manufaktur, konstruksi, pengolahan makanan, pertanian, dan perawat lansia
                            (Kaigo) sesuai bidang kerja.
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#142344]">
                        <span class="text-3xl font-extrabold text-[#c82036]">04</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">Simulasi Wawancara & Pra-Pemberangkatan</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Pelatihan Mensetsu (wawancara user Jepang), pengurusan dokumen COE/Visa, serta pemantapan akhir
                            sebelum terbang ke Jepang.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- BIAYA PELATIHAN --}}
        <section class="w-full bg-white py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        Transparansi Pendidikan
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        Biaya Pelatihan
                    </h2>
                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                    <p class="max-w-2xl mx-auto text-gray-600 text-sm md:text-base mt-5">
                        Skema biaya pendidikan yang jelas dan terjangkau, dilengkapi fasilitas pendukung hingga proses
                        wawancara kerja.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                    {{-- PAKET 1 --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <h3 class="text-xl font-bold text-white">Kelas Reguler Bahasa</h3>
                        <p class="text-sm text-white mt-1">Persiapan Dasar JLPT N5 – N4 (4 Bulan)</p>
                        <div class="my-6 pb-6 border-b border-gray-100">
                            <span class="text-3xl font-extrabold text-[#FFD21F]">Rp 4.500.000</span>
                            <span class="text-white text-sm block mt-1">Bisa diangsur 2x selama masa pendidikan</span>
                        </div>
                        <ul class="space-y-3 text-sm text-white mb-8 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Buku Modul &
                                Kamus Bahasa Jepang</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Seragam
                                Pelatihan & Olahraga</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Sertifikat
                                Kelulusan LPK Konoha</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Konsultasi
                                Jalur Magang / Tokutei Ginou</li>
                        </ul>
                        <a href="https://wa.me/6285890498591"
                            class="w-full text-center py-3 px-4 bg-[#e9edeb] hover:bg-[#c82036] text-[#142344] hover:text-white font-semibold rounded-lg transition">
                            Tanya Detail Program
                        </a>
                    </div>

                    {{-- PAKET 2 (UNGGULAN) --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <span
                            class="bg-[#FFD21F] text-[#142344] text-xs font-extrabold px-3 py-1 rounded-full self-start mb-4 uppercase tracking-wider">
                            Program Unggulan
                        </span>
                        <h3 class="text-xl font-bold">Intensif Magang / TG Jepang</h3>
                        <p class="text-sm text-gray-300 mt-1">Pelatihan Penuh + Asrama (5–6 Bulan)</p>
                        <div class="my-6 pb-6 border-b border-white/15">
                            <span class="text-3xl font-extrabold text-[#FFD21F]">Rp 8.500.000</span>
                            <span class="text-gray-300 text-sm block mt-1">Tersedia opsi skema dana talangan</span>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-100 mb-8 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Semua
                                Fasilitas Kelas Reguler</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Fasilitas
                                Asrama / Mess Selama Pendidikan</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Pelatihan
                                Fisik, Mental & Budaya Kerja</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Fasilitasi
                                Job Matching & Interview User</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span>
                                Pendampingan
                                Pemberkasan hingga Terbang</li>
                        </ul>
                        <a href="https://wa.me/6285890498591"
                            class="w-full text-center py-3 px-4 hover:bg-white bg-[#c82036] hover:text-[#142344] text-white font-semibold rounded-lg transition">
                            Daftar Program Ini
                        </a>
                    </div>

                    {{-- PAKET 3 --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <h3 class="text-xl font-bold text-white">Persiapan SSW / Tokutei Ginou</h3>
                        <p class="text-sm text-white mt-1">Khusus Pemegang Sertifikat JFT / Eks-Magang</p>
                        <div class="my-6 pb-6 border-b border-gray-100">
                            <span class="text-3xl font-extrabold text-[#FFD21F]">Rp 3.000.000</span>
                            <span class="text-gray-500 text-sm block mt-1">Program Pemantapan & Job Matching (2
                                Bulan)</span>
                        </div>
                        <ul class="space-y-3 text-sm text-white mb-8 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Kelas
                                Pemantapan Kaiwa & Keigo</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Bimbingan
                                Ujian Skill (SSW)</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Latihan
                                Wawancara Perusahaan Jepang</li>
                            <li class="flex items-center gap-2"><span class="text-[#FFD21F] font-bold">✓</span> Akses
                                Lowongan Kerja Langsung ke Jepang</li>
                        </ul>
                        <a href="https://wa.me/6285890498591"
                            class="w-full text-center py-3 px-4 bg-[#e9edeb] hover:bg-[#c82036] text-[#142344] hover:text-white font-semibold rounded-lg transition">
                            Tanya Detail Program
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- SUSUNAN PENGURUS & TENAGA PENGAJAR --}}
        <section class="w-full bg-[#e9edeb] py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10">

                {{-- SUSUNAN PENGURUS --}}
                <div class="mb-20">
                    <div class="text-center mb-12">
                        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                            Manajemen Lembaga
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                            Susunan Pengurus
                        </h2>
                        <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                    </div>

                    @php
                        $pengurus = [
                            [
                                'nama' => 'Mujibur Rahman Qiyami, S.Kom.',
                                'jabatan' => 'Direktur Utama LPK Konoha',
                                'img' => 'assets/img/profil1.jpg',
                            ],
                            [
                                'nama' => 'Dhila Lutfiyana, S.Kom.',
                                'jabatan' => 'Kepala Bidang Pendidikan & Kurikulum',
                                'img' => 'assets/img/profil2.jpg',
                            ],
                            [
                                'nama' => 'M.Rivaldi Samsudin, S.Kom.',
                                'jabatan' => 'Kepala Penempatan & Kerja Sama Jepang',
                                'img' => 'assets/img/profil3.jpg',
                            ],
                            [
                                'nama' => 'Satrio Dwi Putra, S.Kom.',
                                'jabatan' => 'Kepala Administrasi & Keuangan',
                                'img' => 'assets/img/profil4.jpg',
                            ],
                        ];

                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($pengurus as $item)
                            <div
                                class="bg-white p-6 rounded-xl shadow-sm text-center border-b-4 border-[#142344] hover:shadow-md transition-shadow">
                                <img src="{{ $item['img'] }}" alt="{{ $item['nama'] }}"
                                    class="w-40 h-40 rounded-full object-cover mx-auto mb-4 border-2 border-[#142344]">

                                <h3 class="text-lg font-bold text-[#142344]">{{ $item['nama'] }}</h3>
                                <p class="text-sm font-medium text-[#c82036] mt-1">{{ $item['jabatan'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    {{-- TENAGA PENGAJAR --}}
                    <div class="">
                        <div class="text-center mb-12 w-full bg-white py-16 md:py-24">
                            <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                                Tim Akademik & Instruktur
                            </span>
                            <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                                Tenaga Pengajar
                            </h2>
                            <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                            <p class="max-w-2xl mx-auto text-gray-700 text-sm md:text-base mt-5">
                                Dibimbing langsung oleh sensei bersertifikat kompetensi bahasa Jepang serta alumni
                                pemagangan
                                Jepang yang memahami budaya kerja secara nyata.
                            </p>
                        </div>

                        @php
                            $pengajar = [
                                [
                                    'nama' => 'Hendra Wijaya (Sensei)',
                                    'spesialisasi' => 'Kepala Instruktur Bahasa Jepang',
                                    'kualifikasi' =>
                                        'Sertifikat JLPT N2 • Pengalaman Kerja di Prefektur Aichi, Jepang (3 Tahun)',
                                ],
                                [
                                    'nama' => 'Kenji Takahashi',
                                    'spesialisasi' => 'Native Speaker & Budaya Kerja Jepang',
                                    'kualifikasi' =>
                                        'Instruktur Kaiwa (Percakapan) & Simulasi Wawancara Perusahaan Jepang',
                                ],
                                [
                                    'nama' => 'Dedi Kurniawan, S.Pd.',
                                    'spesialisasi' => 'Instruktur Tata Bahasa & JFT-Basic',
                                    'kualifikasi' =>
                                        'Sertifikat JLPT N2 • Spesialis Persiapan Ujian JFT-Basic A2 & SSW',
                                ],
                                [
                                    'nama' => 'Rizky Pratama',
                                    'spesialisasi' => 'Pembina Fisik, Disiplin & Karakter',
                                    'kualifikasi' =>
                                        'Eks-Magang Jepang Bidang Manufaktur (Osaka) • Instruktur Budaya 5S',
                                ],
                            ];
                        @endphp

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach ($pengajar as $guru)
                                <div
                                    class="bg-white p-6 rounded-xl shadow-sm flex items-start gap-4 border-l-4 border-[#c82036]">
                                    <div
                                        class="w-14 h-14 rounded-lg bg-[#e9edeb] text-[#142344] flex-shrink-0 flex items-center justify-center font-extrabold text-xl">
                                        {{ substr($guru['nama'], 0, 1) }}
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#142344]">{{ $guru['nama'] }}</h3>
                                        <p class="text-sm font-semibold text-[#c82036] mt-0.5">{{ $guru['spesialisasi'] }}
                                        </p>
                                        <p class="text-xs md:text-sm text-gray-600 mt-2 leading-relaxed">
                                            {{ $guru['kualifikasi'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </section>

        {{-- MITRA LPK & KANTOR PERWAKILAN --}}
        <section class="w-full bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                    {{-- MITRA LPK --}}
                    <div>
                        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                            Jejaring Kerja Sama
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                            Mitra Resmi LPK Konoha
                        </h2>
                        <div class="w-16 h-1 bg-[#FFD21F] mt-4 mb-6 rounded-full"></div>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6">
                            Kami menjalin kemitraan resmi dengan Sending Organization (SO) berizin Kemnaker RI, Kumiai
                            (Asosiasi Penerima di Jepang), serta lembaga sertifikasi profesi.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">Nihon Jinzai Kyodo Kumiai</h4>
                                <p class="text-xs text-gray-600 mt-1">Asosiasi Penerima Pemagangan • Prefektur Aichi,
                                    Jepang</p>
                            </div>
                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">PT. Sakura Nusantara Sejahtera</h4>
                                <p class="text-xs text-gray-600 mt-1">Sending Organization (SO) Resmi Penempatan Jepang</p>
                            </div>
                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">Kansai Technical Support</h4>
                                <p class="text-xs text-gray-600 mt-1">Lembaga Pendampingan Tenaga Kerja SSW • Osaka</p>
                            </div>
                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">LSP Vokasi & Bahasa Indonesia</h4>
                                <p class="text-xs text-gray-600 mt-1">Mitra Uji Kompetensi & Sertifikasi Keahlian</p>
                            </div>
                        </div>
                    </div>

                    {{-- KANTOR PERWAKILAN --}}
                    <div>
                        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                            Jangkauan Layanan
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                            Kantor Perwakilan
                        </h2>
                        <div class="w-16 h-1 bg-[#FFD21F] mt-4 mb-6 rounded-full"></div>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6">
                            Untuk mempermudah proses pendaftaran, seleksi awal, dan konsultasi orang tua peserta, LPK Konoha
                            memiliki perwakilan di beberapa wilayah:
                        </p>

                        <div class="space-y-4">
                            <div class="p-5 rounded-lg border border-gray-200 hover:border-[#142344] transition">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-bold text-[#142344]">Kantor Pusat & Kampus Utama</h4>
                                    <span
                                        class="text-xs font-semibold bg-[#FFD21F] text-[#142344] px-2.5 py-0.5 rounded">Pusat</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-1.5">Jl. Raya Pendidikan No. 88, Cikarang, Kab. Bekasi,
                                    Jawa Barat</p>
                                <p class="text-xs text-[#c82036] font-semibold mt-1">Telp / WA: 0858-9049-8591</p>
                            </div>

                            <div class="p-5 rounded-lg border border-gray-200 hover:border-[#142344] transition">
                                <h4 class="font-bold text-[#142344]">Perwakilan Jawa Tengah (Semarang)</h4>
                                <p class="text-sm text-gray-600 mt-1.5">Jl. Majapahit No. 142, Pedurungan, Kota Semarang,
                                    Jawa Tengah</p>
                                <p class="text-xs text-[#c82036] font-semibold mt-1">Layanan Informasi & Seleksi Wilayah
                                    Jateng – DIY</p>
                            </div>

                            <div class="p-5 rounded-lg border border-gray-200 hover:border-[#142344] transition">
                                <h4 class="font-bold text-[#142344]">Kantor Perwakilan Jepang (Nagoya)</h4>
                                <p class="text-sm text-gray-600 mt-1.5">Naka-ku, Nagoya-shi, Aichi-ken 460-0008, Japan</p>
                                <p class="text-xs text-[#c82036] font-semibold mt-1">Pusat Monitoring & Bantuan Peserta
                                    Magang di Jepang</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
