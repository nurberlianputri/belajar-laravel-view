<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            ['nim' => '250001', 'nama' => 'Suciyanti',           'email' => 'suciyanti@example.com',  'jurusan' => 'Teknik Komputer'],
            ['nim' => '250002', 'nama' => 'Nur Amalia',          'email' => 'nuramalia@example.com',  'jurusan' => 'Teknik Komputer'],
            ['nim' => '250003', 'nama' => 'Siti Fahira Azzahra', 'email' => 'sitifahira@example.com', 'jurusan' => 'Teknik Informatika'],
            ['nim' => '250004', 'nama' => 'Nadia Anastasya',     'email' => 'nadia@example.com',      'jurusan' => 'Sistem Informasi'],
        ];

        foreach ($data as $row) {
            Mahasiswa::updateOrCreate(['nim' => $row['nim']], $row);
        }
    }
}
