<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Category::create([
            'category_name' => 'uncategorized',
        ]);

        \App\Category::create([
            'category_name' => 'Pen',
        ]);

        \App\Category::create([
            'category_name' => 'Pencil',
        ]);
    }
}
