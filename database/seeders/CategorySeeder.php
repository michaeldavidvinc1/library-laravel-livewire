<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Mistery',
            'slug'=>'mistery'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug'=>'romance'
        ]);
        Category::create([
            'name' => 'Education',
            'slug'=>'education'
        ]);
        Category::create([
            'name' => 'Novel',
            'slug'=>'novel'
        ]);
        Category::create([
            'name' => 'Drama',
            'slug'=>'drama'
        ]);
    }
}
