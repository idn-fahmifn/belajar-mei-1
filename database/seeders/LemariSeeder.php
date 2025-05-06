<?php

namespace Database\Seeders;

use App\Models\Lemari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LemariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lemari::create([
        //     'nama_lemari' => "Lemari B",
        //     'deskripsi' => "Ini lemari milik Bersama"
        // ]);

        Lemari::factory()->count(100)->create();

    }
}
