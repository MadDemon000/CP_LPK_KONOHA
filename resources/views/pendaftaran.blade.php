<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Magang</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="min-h-100">
        @php
            $pendidikan = ['SMA / SMK / MA', 'D1 / D2 / D3', 'S1', 'Lainnya'];
            $bidang = [
                'Manufaktur',
                'Konstruksi',
                'Pertanian',
                'Perawatan Lansia (Kaigo)',
                'Perhotelan & Kuliner',
                'Belum menentukan',
            ];
            $bahasa = ['Belum pernah belajar', 'Dasar (setara N5)', 'Menengah (setara N4)', 'Mahir (N3 atau lebih)'];
            $maxLahir = now()->subYears(18)->toDateString(); // usia minimal 18 tahun
        @endphp

        <section class="max-w-7xl mx-auto px-4 py-12">

            @if (session('success'))
                <x-wizard.success :message="session('success')" />
            @else
                <x-page-header eyebrow="Pendaftaran Peserta" title="Daftar Magang ke Jepang" highlight="LPK Konoha">
                    Lengkapi data diri dan latar belakang pendidikan kamu dalam tiga langkah singkat.
                    Pastikan semua data benar sebelum dikirim.
                </x-page-header>

                <div data-animate="fade-up" class="max-w-3xl mx-auto">

                    <x-wizard.stepper :steps="['Data Pribadi', 'Pendidikan & Keahlian', 'Konfirmasi Data']" />

                    <div id="wizard-card" class="rounded-2xl bg-white p-6 shadow-lg sm:p-10">
                        <x-form.errors />

                        <form id="form-daftar" method="POST" action="{{ route('daftar.create') }}" novalidate
                            data-error-fields="{{ json_encode(array_keys($errors->messages())) }}">
                            @csrf

                            {{-- ===== STEP 1 ===== --}}
                            <x-wizard.step title="Data Pribadi" description="Isi sesuai KTP / Kartu Keluarga." summary
                                active>
                                <x-form.field name="nama_lengkap" label="Nama lengkap" placeholder="Sesuai KTP"
                                    autocomplete="name" />

                                <x-form.field name="nik" label="NIK" placeholder="16 digit angka"
                                    inputmode="numeric" pattern="\d{16}" maxlength="16"
                                    title="NIK terdiri dari 16 digit angka" />

                                <x-form.row>
                                    <x-form.field name="tempat_lahir" label="Tempat lahir" />
                                    <x-form.field name="tanggal_lahir" label="Tanggal lahir" type="date"
                                        :max="$maxLahir" hint="Usia minimal 18 tahun." />
                                </x-form.row>

                                <x-form.radio-group name="jenis_kelamin" label="Jenis kelamin" :options="['Laki-laki', 'Perempuan']" />

                                <x-form.row>
                                    <x-form.field name="no_hp" label="No. HP / WhatsApp" type="tel"
                                        inputmode="tel" pattern="^(\+62|62|0)8[0-9]{8,12}$" title="Contoh: 081234567890"
                                        placeholder="081234567890" />
                                    <x-form.field name="email" label="Email" type="email" autocomplete="email"
                                        placeholder="nama@email.com" />
                                </x-form.row>

                                <x-form.field name="alamat" label="Alamat lengkap" type="textarea" rows="3"
                                    placeholder="Jalan, RT/RW, desa/kelurahan, kecamatan, kabupaten/kota" />
                            </x-wizard.step>

                            {{-- ===== STEP 2 ===== --}}
                            <x-wizard.step title="Pendidikan & Keahlian"
                                description="Ceritakan latar belakang dan bidang yang kamu minati." summary>
                                <x-form.row>
                                    <x-form.field name="pendidikan" label="Pendidikan terakhir" type="select"
                                        :options="$pendidikan" placeholder="Pilih pendidikan" />
                                    <x-form.field name="tahun_lulus" label="Tahun lulus" type="number" min="1990"
                                        :max="date('Y')" :placeholder="date('Y')" />
                                </x-form.row>

                                <x-form.row>
                                    <x-form.field name="asal_sekolah" label="Asal sekolah / kampus" />
                                    <x-form.field name="jurusan" label="Jurusan" :required="false" />
                                </x-form.row>

                                <x-form.row>
                                    <x-form.field name="bidang_minat" label="Bidang kerja yang diminati"
                                        summary="Bidang kerja diminati" type="select" :options="$bidang"
                                        placeholder="Pilih bidang" />
                                    <x-form.field name="bahasa_jepang" label="Kemampuan bahasa Jepang" type="select"
                                        :options="$bahasa" placeholder="Pilih level" />
                                </x-form.row>

                                <x-form.row>
                                    <x-form.field name="tinggi_badan" label="Tinggi badan (cm)" type="number"
                                        min="120" max="220" />
                                    <x-form.field name="berat_badan" label="Berat badan (kg)" type="number"
                                        min="30" max="200" />
                                </x-form.row>

                                <x-form.field name="pengalaman_kerja" label="Pengalaman kerja" type="textarea"
                                    rows="3" :required="false"
                                    placeholder="Contoh: operator mesin di pabrik, 2 tahun" />
                            </x-wizard.step>

                            {{-- ===== STEP 3 ===== --}}
                            <x-wizard.step title="Konfirmasi Data"
                                description="Periksa kembali data kamu. Klik Ubah kalau ada yang perlu diperbaiki.">
                                <div id="ringkasan" class="space-y-4"></div>

                                <label class="flex cursor-pointer items-start gap-3 rounded-lg bg-gray-50 p-4">
                                    <input type="checkbox" name="persetujuan" value="1" required
                                        class="mt-0.5 size-4 rounded border-gray-300 text-blue-950 focus:ring-blue-950">
                                    <span class="text-sm text-gray-700">
                                        Saya menyatakan bahwa seluruh data di atas benar dan dapat
                                        dipertanggungjawabkan.
                                    </span>
                                </label>
                            </x-wizard.step>

                            <x-wizard.nav />
                        </form>
                    </div>
                </div>
            @endif
        </section>
    </main>
</body>

</html>
