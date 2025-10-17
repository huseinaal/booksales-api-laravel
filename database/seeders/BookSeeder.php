<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'author_id' => 1,
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => 'A boy discovers he is a wizard.'
            ],
            [
                'author_id' => 2,
                'title' => 'Bumi',
                'description' => 'Petualangan di dunia paralel.'
            ],
            [
                'author_id' => 3,
                'title' => 'And Then There Were None',
                'description' => 'Misteri di sebuah pulau terpencil.'
            ],
            [
                'author_id' => 4,
                'title' => 'The Shining',
                'description' => 'Horor psikologis di sebuah hotel.'
            ],
            [
                'author_id' => 1,
                'title' => 'Harry Potter and the Chamber of Secrets',
                'description' => 'Tahun kedua Harry di Hogwarts.'
            ],
        ]);
    }
}