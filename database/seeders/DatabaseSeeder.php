<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = 'Tekom D 25';
        $prodi = 'Teknik Komputer';

        // Ganti NIM dengan NIM asli
        $daftar = [
            ['nim' => '25001', 'nama' => 'Fitriani'],
            ['nim' => '25002', 'nama' => 'Berlian'],
            ['nim' => '25003', 'nama' => 'Itta'],
            ['nim' => '25004', 'nama' => 'Maii'],
        ];

        foreach ($daftar as $mhs) {
            Mahasiswa::updateOrCreate(
                ['nim' => $mhs['nim']],
                ['nama' => $mhs['nama'], 'kelas' => $kelas, 'prodi' => $prodi]
            );
        }
    }
}