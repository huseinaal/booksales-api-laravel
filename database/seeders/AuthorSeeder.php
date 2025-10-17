<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['name' => 'Agatha Christie', 'country' => 'Inggris'],
            ['name' => 'Stephen King', 'country' => 'Amerika Serikat'],
            ['name' => 'Haruki Murakami', 'country' => 'Jepang'],
        ]);
    }
}   