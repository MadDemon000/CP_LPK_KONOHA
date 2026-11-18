@extends('layout')
@section('title', 'Program Magang')
@section('content')
    <div class="antialiased">
        <header
            class="bg-gradient-to-br from-slate-900 via-slate-800 to-red-950 text-white pt-16 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <div
                class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]">
            </div>
            <div class="max-w-6xl mx-auto relative z-10 text-center">
                <span
                    class="inline-block bg-red-600/90 text-white text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 shadow-md">
                    Resmi & Terpercaya • LPK Konoha
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-6">
                    Program Magang ke Jepang
                </h1>
                <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed mb-10">
                    Para peserta dari LPK Konoha melaksanakan program pemagangan ke Jepang guna meningkatkan
                    keterampilan
                    kerja, disiplin dan etos kerja global, pada sektor-sektor kerja yang dibutuhkan di Jepang.
                </p>

                <!-- Deskripsi Foto -->
                <div
                    class="max-w-4xl mx-auto bg-white/10 backdrop-blur-md p-3 sm:p-4 rounded-2xl border border-white/20 custom-shadow">
                    <div class="rounded-xl overflow-hidden shadow-lg relative group">
                        <img src="{{ asset('assets/img/iconweb2.jpg') }}"
                            alt="Suasana Pelatihan dan Pelepasan Peserta LPK Konoha"
                            class="w-full h-64 sm:h-96 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6">
                            <div class="text-left text-white">
                                <span
                                    class="bg-red-600 text-xs font-semibold px-2.5 py-1 rounded-md mb-2 inline-block">Fasilitas
                                    Utama</span>
                                <p class="text-sm sm:text-base font-medium text-slate-100">Suasana ruang kelas dan
                                    pelatihan
                                    intensif bahasa serta budaya Jepang di LPK Konoha.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Persentase Jenis Kerja & Donut Chart -->
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-4xl font-bold text-slate-900 mb-3">Persentase Jenis Kerja</h2>
                <p class="text-slate-600 max-w-xl mx-auto text-sm sm:text-base">Distribusi penempatan sektor pekerjaan
                    magang ke Jepang di LPK Konoha (Data per Desember 2025).</p>
            </div>

            <div
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white rounded-3xl p-6 sm:p-10 custom-shadow border border-slate-100">
                <!-- Donut Chart SVG -->
                <div class="lg:col-span-5 flex flex-col items-center justify-center relative">
                    <div class="relative w-64 h-64 sm:w-72 sm:h-72">
                        <svg viewBox="0 0 100 100" class="w-full h-full transform -rotate-90">
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#B91C1C"
                                stroke-width="18" stroke-dasharray="67.8 251.2" stroke-dashoffset="0" class="donut-segment"
                                data-title="Proses Mesin (27%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#EA580C"
                                stroke-width="18" stroke-dasharray="52.7 251.2" stroke-dashoffset="-67.8"
                                class="donut-segment" data-title="Industri Makanan (21%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#F97316"
                                stroke-width="18" stroke-dasharray="32.6 251.2" stroke-dashoffset="-120.5"
                                class="donut-segment" data-title="Konstruksi (13%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#EAB308"
                                stroke-width="18" stroke-dasharray="25.1 251.2" stroke-dashoffset="-153.1"
                                class="donut-segment" data-title="Pertanian (10%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#FACC15"
                                stroke-width="18" stroke-dasharray="20.1 251.2" stroke-dashoffset="-178.2"
                                class="donut-segment" data-title="Produk Plastik (8%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#3F6212"
                                stroke-width="18" stroke-dasharray="15.1 251.2" stroke-dashoffset="-198.3"
                                class="donut-segment" data-title="Painting (6%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#64748B"
                                stroke-width="18" stroke-dasharray="15.1 251.2" stroke-dashoffset="-213.4"
                                class="donut-segment" data-title="Kaigo / Lainnya (15%)"></circle>
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#CBD5E1"
                                stroke-width="18" stroke-dasharray="22.7 251.2" stroke-dashoffset="-228.5"
                                class="donut-segment" data-title="Lainnya (9%)"></circle>
                        </svg>
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-center pointer-events-none">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Sektor</span>
                            <span class="text-xl font-extrabold text-slate-800">100%</span>
                            <span class="text-[10px] text-slate-500">Desember 2025</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 mt-4 text-center italic">*Arahkan kursor atau ketuk grafik untuk
                        melihat ringkasan sektor</p>
                </div>

                <!-- Daftar List Sektor Persentase -->
                <div class="lg:col-span-7 space-y-3">
                    <div class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-red-600">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Proses Mesin</span>
                        <span class="bg-red-100 text-red-700 font-bold px-3 py-1 rounded-lg text-sm">27%</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-orange-600">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Industri Makanan</span>
                        <span class="bg-orange-100 text-orange-700 font-bold px-3 py-1 rounded-lg text-sm">21%</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-amber-500">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Konstruksi</span>
                        <span class="bg-amber-100 text-amber-700 font-bold px-3 py-1 rounded-lg text-sm">13%</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-yellow-500">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Pertanian</span>
                        <span class="bg-yellow-100 text-yellow-800 font-bold px-3 py-1 rounded-lg text-sm">10%</span>
                    </div>
                    <div
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-yellow-400">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Produk Plastik</span>
                        <span class="bg-yellow-50 text-yellow-800 font-bold px-3 py-1 rounded-lg text-sm">8%</span>
                    </div>
                    <div class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-lime-700">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">Painting & Sektor
                            Lainnya</span>
                        <span class="bg-lime-100 text-lime-800 font-bold px-3 py-1 rounded-lg text-sm">21%</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Foto Presentasi Jenis Kerja (Interaktif Sektor Satu-Satu) -->
        <section class="py-16 bg-slate-900 text-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span
                        class="text-red-500 font-bold text-xs uppercase tracking-widest bg-red-950/80 px-3 py-1 rounded-full border border-red-800/50">Eksplorasi
                        Interaktif</span>
                    <h2 class="text-2xl sm:text-4xl font-bold mt-3">Foto Presentasi Jenis Pekerjaan</h2>
                    <p class="text-slate-400 text-sm sm:text-base mt-2">Klik tombol atau pilihan di bawah untuk melihat
                        foto dan penjelasan mendetail dari masing-masing sektor kerja.</p>
                </div>

                <!-- Tombol Navigasi Sektor (Pilihan Interaktif Satu-Satu) -->
                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-8">
                    <button onclick="switchJob(0)" id="jobBtn0"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-red-600 text-white shadow-lg cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-gears"></i> Proses Mesin
                    </button>
                    <button onclick="switchJob(1)" id="jobBtn1"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-seedling"></i> Pertanian
                    </button>
                    <button onclick="switchJob(2)" id="jobBtn2"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-hand-holding-medical"></i> Perawatan Lansia
                    </button>
                    <button onclick="switchJob(3)" id="jobBtn3"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-book-open"></i> Pelatihan Bahasa
                    </button>
                </div>

                <!-- Konten Interaktif Detail Sektor Kerja -->
                <div
                    class="bg-slate-800 rounded-3xl overflow-hidden custom-shadow border border-slate-700 grid grid-cols-1 lg:grid-cols-12">
                    <!-- Foto Sektor -->
                    <div class="lg:col-span-7 relative h-72 sm:h-96 lg:h-auto min-h-[320px]">
                        <img id="jobImage" src="{{ asset('assets/img/pm2.jpg') }}" alt="Foto Sektor Kerja"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent lg:hidden flex items-end p-6">
                            <span id="jobBadgeMobile"
                                class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">Sektor 1 • Porsi
                                Terbesar (27%)</span>
                        </div>
                    </div>

                    <!-- Penjelasan Sektor -->
                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                        <div>
                            <div class="hidden lg:inline-block mb-3">
                                <span id="jobBadgeDesktop"
                                    class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">Sektor 1 •
                                    Porsi
                                    Terbesar (27%)</span>
                            </div>
                            <h3 id="jobTitle" class="text-2xl font-bold text-white mb-3">Proses Mesin (Kikai Kakou)
                            </h3>
                            <p id="jobDescription" class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
                                Mengoperasikan mesin CNC, bubut, milling, dan perakitan komponen industri presisi tinggi
                                di
                                pabrik manufaktur otomotif maupun mesin standar Jepang. Peserta dibekali keahlian teknis
                                tingkat tinggi sesuai standar keselamatan industri global (Safety First).
                            </p>

                            <!-- Poin Keunggulan Sektor -->
                            <div class="space-y-2 mb-6 border-t border-slate-700 pt-4">
                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint1">Fasilitas mesin berteknologi tinggi (Mazak/Fanuc)</span>
                                </div>
                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint2">Peluang penyerapan kerja tertinggi di Jepang</span>
                                </div>
                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint3">Gaji kompetitif sesuai standar regional prefektur</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-between pt-4 border-t border-slate-700 text-xs text-slate-400">
                            <span>Pilih tombol di atas untuk melihat sektor lain</span>
                            <span id="jobCounter" class="font-bold text-white">1 dari 4 Sektor</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prosedur Seleksi Calon Peserta Magang -->
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
            <div class="text-center mb-14">
                <span
                    class="text-red-600 font-bold text-xs uppercase tracking-widest bg-red-50 px-3 py-1 rounded-full border border-red-100">Alur
                    Pendaftaran</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-slate-900 mt-3">Prosedur Seleksi Calon Peserta Magang
                </h2>
                <p class="text-slate-600 max-w-xl mx-auto text-sm sm:text-base mt-2">Tahapan sistematis dari awal
                    pendaftaran hingga keberangkatan ke Jepang bersama LPK Konoha.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Step 1 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        1</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon1.png') }}">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Training Order</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">LPK Konoha menerima Training Order resmi dari
                        pihak
                        Jepang sebagai bukti tertulis yang sah.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Estimasi: 1
                        Bulan
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        2</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon2.png') }}">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Kerjasama LPK Daerah</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Bekerjasama dengan puluhan LPK dan sekolah bahasa
                        Jepang di daerah untuk penyediaan calon peserta.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Koordinasi
                        Daerah
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        3</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon3.png') }}">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Seleksi Tahap Pertama</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Meliputi tes Matematika, Bahasa Jepang dasar,
                        Psikotes, Fisik, dan pemeriksaan dokumen.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Uji Kompetensi
                        Awal
                    </div>
                </div>

                <!-- Step 4 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        4</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon4.png') }}">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Seleksi Tahap Kedua</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Pemeriksaan kesehatan menyeluruh (Medical Check
                        Up)
                        dan wawancara lanjutan.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">MCU & Wawancara
                    </div>
                </div>

                <!-- Step 5 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        5</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon5.png') }}">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Wawancara Perusahaan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Bagi peserta lolos tes LBI dicalonkan wawancara
                        langsung dengan perusahaan penerima dari Jepang.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Estimasi: 1
                        Bulan
                    </div>
                </div>

                <!-- Step 6 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        6</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon6.png') }}">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Pendidikan & Pelatihan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Peserta lolos wawancara bersama orang tua
                        mengikuti
                        pendidikan intensif di LPK Konoha selama 4 bulan.</p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Durasi: 4 Bulan
                    </div>
                </div>

                <!-- Step 7 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group md:col-span-2 lg:col-span-2">
                    <div
                        class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">
                        7</div>
                    <div
                        class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon7.png') }}">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2">Proses Keberangkatan ke Jepang</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Peserta diterima oleh Lembaga Penerima
                        (Kumiai/Kaisha) di Jepang dan disalurkan resmi ke Perusahaan Penerima kerja di berbagai
                        prefektur.
                    </p>
                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">Berangkat ke
                        Jepang
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Header / Hero Section (Tanpa Navbar) -->



@endsection
<!-- JavaScript untuk Tombol Interaktif Sektor Pekerjaan Satu-Satu -->
@push('scripts')
    <script>
        const jobData = [

            {
                title: "Proses Mesin (Kikai Kakou)",
                badge: "Sektor 1 • Porsi Terbesar (27%)",
                image: "{{ asset('assets/img/pm2.jpg') }}",
                desc: "Mengoperasikan mesin CNC, bubut, milling, dan perakitan komponen industri presisi tinggi di pabrik manufaktur otomotif maupun mesin standar Jepang. Peserta dibekali keahlian teknis tingkat tinggi sesuai standar keselamatan industri global (Safety First).",
                point1: "Fasilitas mesin berteknologi tinggi (Mazak/Fanuc)",
                point2: "Peluang penyerapan kerja tertinggi di Jepang",
                point3: "Gaji kompetitif sesuai standar regional prefektur",
                counter: "1 dari 4 Sektor"
            },
            {
                title: "Pertanian Modern (Nogyo)",
                badge: "Sektor 4 • Porsi 10%",
                image: "{{ asset('assets/img/pm3.jpg') }}",
                desc: "Budidaya tanaman dalam green house, manajemen panen buah dan sayur, serta pemanfaatan teknologi pertanian modern di berbagai prefektur pertanian terkemuka di Jepang.",
                point1: "Teknologi pertanian otomatis dan green house modern",
                point2: "Lingkungan kerja asri di alam terbuka & bersih",
                point3: "Mempelajari manajemen agribisnis berstandar ekspor",
                counter: "2 dari 4 Sektor"
            },
            {
                title: "Perawatan Lansia (Kaigo)",
                badge: "Sektor Kesehatan • Permintaan Tinggi",
                image: "{{ asset('assets/img/pm1.jpg') }}",
                desc: "Pelayanan pendampingan, pemeliharaan kesehatan, serta perawatan fasilitas kesejahteraan lansia profesional di fasilitas kesehatan Jepang dengan penuh keramahan dan dedikasi.",
                point1: "Peluang besar melanjutkan visa Kaigo Tokutei Ginou",
                point2: "Pelatihan khusus keperawatan bersertifikasi resmi",
                point3: "Lingkungan kerja humanis dan penuh apresiasi",
                counter: "3 dari 4 Sektor"
            },
            {
                title: "Kelas Persiapan & Bahasa Jepang",
                badge: "Fasilitas Utama LPK Konoha",
                image: "{{ asset('assets/img/pm4.webp') }}",
                desc: "Program karantina dan pendidikan intensif bahasa Jepang (N5-N4) serta penanaman etos kerja disiplin tinggi (Horenso & 5S) sebelum peserta diberangkatkan ke perusahaan penerima.",
                point1: "Pengajar berpengalaman dan native speaker",
                point2: "Kurikulum standar ujian internasional JFT/JLPT",
                point3: "Asrama dan fasilitas belajar lengkap terpusat",
                counter: "4 dari 4 Sektor"
            }
        ];

        function switchJob(index) {
            const data = jobData[index];

            // Update Text Content
            document.getElementById('jobTitle').innerText = data.title;
            document.getElementById('jobBadgeDesktop').innerText = data.badge;
            document.getElementById('jobBadgeMobile').innerText = data.badge;
            document.getElementById('jobDescription').innerText = data.desc;
            document.getElementById('jobPoint1').innerText = data.point1;
            document.getElementById('jobPoint2').innerText = data.point2;
            document.getElementById('jobPoint3').innerText = data.point3;
            document.getElementById('jobCounter').innerText = data.counter;

            // Update Image with smooth fade
            const imgEl = document.getElementById('jobImage');
            imgEl.style.opacity = '0';
            setTimeout(() => {
                imgEl.src = data.image;
                imgEl.style.opacity = '1';
            }, 200);

            // Update Active Button Styling
            const buttons = document.querySelectorAll('.job-tab-btn');
            buttons.forEach((btn, i) => {
                if (i === index) {
                    btn.classList.remove('bg-slate-800', 'text-slate-300');
                    btn.classList.add('bg-red-600', 'text-white', 'shadow-lg');
                } else {
                    btn.classList.remove('bg-red-600', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-slate-800', 'text-slate-300');
                }
            });
        }
    </script>
@endpush
