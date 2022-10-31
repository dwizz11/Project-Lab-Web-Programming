<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Camera
        DB::table('products')->insert([
            'productname' => 'FujiFilm Xt1',
            'productslug' =>Str::slug('FujiFilm Xt1'),
            'productdesc' => 'Camera with best lowlight sensor',
            'price' => 12000000,
            'category_id' => 1
        ]);

        

        DB::table('products')->insert([
            'productname' => 'Sony A7000',
            'productslug' =>Str::slug('Sony A7000'),
            'productdesc' => 'Camera with best shutter speed sensor',
            'price' => 1500000,
            'category_id' => 1
        ]);



        // Beauty
        DB::table('products')->insert([
            'productname' => 'Loreal Paris',
            'productslug' =>Str::slug('Loreal Paris'),
            'productdesc' => 'Cream to whitening your skin',
            'price' => 42000,
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'Loreal Paris',
            'productslug' =>Str::slug('Loreal Paris') . '2',
            'productdesc' => 'Cream to whitening your skin',
            'price' => 42000,
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'Loreal Paris',
            'productslug' =>Str::slug('Loreal Paris') . '3',
            'productdesc' => 'Cream to whitening your skin',
            'price' => 42000,
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'Loreal Paris',
            'productslug' =>Str::slug('Loreal Paris') . '4',
            'productdesc' => 'Cream to whitening your skin',
            'price' => 42000,
            'category_id' => 2
        ]);
    }
}
