<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Putri Wulandari';
        $nim = '242520071';
        $prodi = 'Sistem Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nim' => '242520071', 'nama' => 'Putri Wulandari', 'ipk' => 3.75],
            ['nim' => '242520073', 'nama' => 'Dinar Findy Aulia', 'ipk' => 3.40],
            ['nim' => '262520009', 'nama' => 'Ellsio Lasmana', 'ipk' => 2.80],
            ['nim' => '26250010', 'nama' => 'Farrel Aldiansyah', 'ipk' => 3.90],
            ['nim' => '242520099', 'nama' => 'Joko Susilo', 'ipk' => 1.85],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $dataMahasiswa = [
            '242520071' => ['nama' => 'Putri Wulandari', 'nim' => '242520071', 'ipk' => 3.75, 'prodi' => 'Sistem Informasi'],
            '242520073' => ['nama' => 'Dinar Findy Aulia', 'nim' => '242520073', 'ipk' => 3.40, 'prodi' => 'Sistem Informasi'],
            '262520009' => ['nama' => 'Ellsio Lasmana', 'nim' => '262520009', 'ipk' => 2.80, 'prodi' => 'Sistem Informasi'],
            '26250010' => ['nama' => 'Farrel Aldiansyah', 'nim' => '26250010', 'ipk' => 3.90, 'prodi' => 'Sistem Informasi'],
            '242520099' => ['nama' => 'Joko Susilo', 'nim' => '242520099', 'ipk' => 1.85, 'prodi' => 'Sistem Informasi'],
        ];

        abort_unless(array_key_exists($nim, $dataMahasiswa), 404);

        $mhs = $dataMahasiswa[$nim];
        return view('mahasiswa.detail', compact('mhs'));
    }
}