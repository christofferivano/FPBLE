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
            'category_description' => 'temporary',
        ]);

        \App\Category::create([
            'category_name' => 'Pen',
            'category_description' => 'untuk menulis dengan tinta',
        ]);

        \App\Category::create([
            'category_name' => 'Pencil',
            'category_description' => 'untuk menulis',
        ]);
    }
}
