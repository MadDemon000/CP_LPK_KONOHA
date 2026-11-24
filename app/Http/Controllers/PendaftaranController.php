<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function daftar()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_lengkap'     => ['required', 'string', 'max:100'],
            'nik'              => ['required', 'digits:16'],
            'tempat_lahir'     => ['required', 'string', 'max:100'],
            'tanggal_lahir'    => ['required', 'date', 'before_or_equal:-18 years'],
            'jenis_kelamin'    => ['required', 'in:Laki-laki,Perempuan'],
            'no_hp'            => ['required', 'regex:/^(\+62|62|0)8[0-9]{8,12}$/'],
            'email'            => ['required', 'email', 'max:150'],
            'alamat'           => ['required', 'string', 'max:500'],

            'pendidikan'       => ['required', 'string', 'max:50'],
            'tahun_lulus'      => ['required', 'integer', 'between:1990,' . date('Y')],
            'asal_sekolah'     => ['required', 'string', 'max:150'],
            'jurusan'          => ['nullable', 'string', 'max:100'],
            'bidang_minat'     => ['required', 'string', 'max:100'],
            'bahasa_jepang'    => ['required', 'string', 'max:50'],
            'tinggi_badan'     => ['required', 'integer', 'between:120,220'],
            'berat_badan'      => ['required', 'integer', 'between:30,200'],
            'pengalaman_kerja' => ['nullable', 'string', 'max:1000'],

            'persetujuan'      => ['accepted'],
        ], [
            'nik.digits'                    => 'NIK harus terdiri dari 16 digit angka.',
            'no_hp.regex'                   => 'Format nomor HP tidak valid. Contoh: 081234567890.',
            'tanggal_lahir.before_or_equal' => 'Usia minimal pendaftar adalah 18 tahun.',
            'persetujuan.accepted'          => 'Kamu harus menyetujui pernyataan data benar.',
        ]);

        // TODO: simpan ke database / kirim email, sesuai kebutuhan, mis.:
        // Pendaftar::create($data);

        return redirect()
            ->route('daftar')
            ->with('success', 'Terima kasih, ' . $data['nama_lengkap'] . '. Data kamu sudah kami terima dan tim LPK Konoha akan menghubungi lewat WhatsApp atau email.');
    }
}
