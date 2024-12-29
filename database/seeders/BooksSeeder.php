<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Books::create([
            'id' => 1,
            'tittle' => "Aura",
            'pubdate' => "2001-01-14",
            'genre' => "Terror",
        ]);

        Books::create([
            'id' => 2,
            'tittle' => "Metamorfosis",
            'pubdate' => "1999-05-04",
            'genre' => "Drama",
        ]);

        Books::create([
            'id' => 3,
            'tittle' => "Frankensein",
            'pubdate' => "2002-01-19",
            'genre' => "Miedo",
        ]);

    }
}
