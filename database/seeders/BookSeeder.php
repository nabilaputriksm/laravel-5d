<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Budi',
            'year' => 2023,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Citra',
            'year' => 2022,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Doni',
            'year' => 2021,
            'stock' => 3,
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Eka',
            'year' => 2023,
            'stock' => 7,
        ]);
    }
}