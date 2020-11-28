<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name' => 'covid',
            'is_new' => 1,
            'is_trending' => 1,
            'is_auto_update' => 0,
            'image' => 'public/images/categories/2020-11-28/covid1606552332.jpg',
            'user' => 1,
        ]);
        category::create([
            'name' => 'corona',
            'is_new' => 1,
            'is_trending' => 1,
            'is_auto_update' => 0,
            'image' => 'public/images/categories/2020-11-28/corona1606552355.jpg',
            'user' => 1,
        ]);
        category::create([
            'name' => 'coding',
            'is_new' => 0,
            'is_trending' => 0,
            'is_auto_update' => 0,
            'image' => 'public/images/categories/2020-11-28/coding1606552384.jpg',
            'user' => 1,
        ]);
        
    }
}
