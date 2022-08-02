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
            'name' => 'Web',
            'slug' => 'web'
        ]);
        Category::create([
            'name' => 'Folletería',
            'slug' => 'folleteria'
        ]);
        Category::create([
            'name' => 'Branding',
            'slug' => 'branding'
        ]);
        Category::create([
            'name' => 'Social Media',
            'slug' => 'social-media'
        ]);
        Category::create([
            'name' => 'Ilustración',
            'slug' => 'ilustracion'
        ]);
        Category::create([
            'name' => 'Estrategia',
            'slug' => 'estrategia'
        ]);
        Category::create([
            'name' => 'Soluciones Digitales',
            'slug' => 'soluciones-digitales'
        ]);
        Category::create([
            'name' => 'Pauta Digital',
            'slug' => 'pauta-digital'
        ]);
        Category::create([
            'name' => 'Packaging',
            'slug' => 'packaging'
        ]);
    }
}
