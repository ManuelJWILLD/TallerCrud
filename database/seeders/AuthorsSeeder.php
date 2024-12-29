<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Authors;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Authors::create([
            'id' => 16,
            'name' => "Antonio",
            'nacionality' => "Irlandes",
            'birth_date' => "2001-01-14",
        ]);
    }
}
