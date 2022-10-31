<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Camera',
            'category_slug' => Str::slug('Camera')
        ]);


        DB::table('categories')->insert([
            'category_name' => 'Beauty',
            'category_slug' => Str::slug('Beauty')
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Game',
            'category_slug' => Str::slug('Game')
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Anime',
            'category_slug' => Str::slug('Anime')
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Sport',
            'category_slug' => Str::slug('Sport')
        ]);
    }
}
