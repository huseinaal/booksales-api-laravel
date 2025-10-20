<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiksi Petualangan',
            'description' => 'Genre yang berfokus pada perjalanan, aksi, dan penemuan hal-hal baru yang penuh tantangan dan risiko.'
        ]);

        Genre::create([
            'name' => 'Sains Fiksi',
            'description' => 'Karya fiksi yang didasarkan pada spekulasi ilmiah, teknologi masa depan, dan kehidupan di luar bumi.'
        ]);

        Genre::create([
            'name' => 'Roman Inspiratif',
            'description' => 'Kisah yang bertujuan untuk membangkitkan semangat, memberikan motivasi, dan mengangkat nilai-nilai kemanusiaan.'
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Genre yang menampilkan unsur magis, dunia imajiner, dan kekuatan gaib sebagai elemen utama cerita.'
        ]);

        Genre::create([
            'name' => 'Sastra Sejarah',
            'description' => 'Genre yang latar waktu dan peristiwanya didasarkan pada sejarah nyata, seringkali dengan karakter fiktif di dalamnya.'
        ]);
    }
}
