<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Pergi',
            'description' => 'Kisah seorang anak rantau yang mencari jati diri di kota besar.',
            'price' => 55000,
            'stock' => 12,
            'cover_photo' => 'pergi.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
            'description' => 'Sebuah petualangan fiksi ilmiah di galaksi yang belum pernah terjamah.',
            'price' => 78000,
            'stock' => 8,
            'cover_photo' => 'supernova.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif anak-anak dari Belitung yang berjuang untuk pendidikan.',
            'price' => 65000,
            'stock' => 20,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Bumi Manusia',
            'description' => 'Kisah Minke di awal abad ke-20 pada masa Hindia Belanda.',
            'price' => 95000,
            'stock' => 10,
            'cover_photo' => 'bumi_manusia.jpg',
            'genre_id' => 5,
            'author_id' => 5
        ]);
    }
}
