<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'), // password
            'gender' => 'Female',
            'birthdate' => '1945-08-17',
            'country' => 'Russia',
            'isadmin' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
