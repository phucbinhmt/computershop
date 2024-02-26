<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_id' => config('constants.CATEGORY_PC'),
            'name' => 'PC',
        ]);
        Category::create([
            'category_id' => config('constants.CATEGORY_LAPTOP'),
            'name' => 'Laptop',
        ]);
        Category::create([
            'category_id' => config('constants.CATEGORY_MOUSE'),
            'name' => 'Chuột',
        ]);
        Category::create([
            'category_id' => config('constants.CATEGORY_KEYBOARD'),
            'name' => 'Bàn phím',
        ]);
        Category::create([
            'category_id' => config('constants.CATEGORY_HEADPHONE'),
            'name' => 'Tai nghe',
        ]);
    }
}
