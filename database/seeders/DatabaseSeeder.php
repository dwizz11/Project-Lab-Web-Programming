<?php

namespace Database\Seeders;

use App\Models\cart;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        

        $this->call(CategorySeeder::class);
        // product::factory(75)->create();
        $this->call(ProductSeeder::class);

        $this->call(CartSeeder::class);
    }
}


