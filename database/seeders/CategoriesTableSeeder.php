<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create([
            'name' => 'Electronics',
        ]);

        Category::create([
            'name' => 'Fashion',
        ]);

        Category::create([
            'name' => 'Books & Literature',
        ]);
        Category::create([
            'name' => 'Sports & Outdoors',
        ]);
        Category::create([
            'name' => 'Beauty & Personal Care',
        ]);
    }
}
