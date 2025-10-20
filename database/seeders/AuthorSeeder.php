<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'description' => 'Penulis produktif Indonesia yang terkenal dengan novel-novel bestseller lintas genre, dari fiksi petualangan hingga roman.'
        ]);

        Author::create([
            'name' => 'Dee Lestari',
            'description' => 'Dikenal dengan karya-karyanya yang memadukan sains, spiritualitas, dan fiksi. Penulis seri terkenal "Supernova".'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'description' => 'Penulis novel "Laskar Pelangi" yang mendunia, mengangkat kisah inspiratif tentang pendidikan dan kehidupan di Belitung.'
        ]);

        Author::create([
            'name' => 'Eka Kurniawan',
            'description' => 'Sastrawan Indonesia yang diakui secara internasional, karyanya sering memadukan realisme magis dengan sejarah dan folklore.'
        ]);

        Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'description' => 'Salah satu sastrawan terbesar Indonesia, terkenal dengan novel-novel sejarahnya yang kuat, termasuk Tetralogi Buru.'
        ]);
    }
}
