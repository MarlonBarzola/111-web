<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Categoría 1',
            'slug' => 'categoria-1'
        ]);
        Category::create([
            'name' => 'Categoría 2',
            'slug' => 'categoria-2'
        ]);
        Category::create([
            'name' => 'Categoría 3',
            'slug' => 'categoria-3'
        ]);
    }
}
