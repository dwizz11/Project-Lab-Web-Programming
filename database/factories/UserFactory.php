<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genderRandom = $this->faker->randomElement(['Male', 'Female']);
        return [
            'name' => $this->faker->name(),
            'email' => preg_replace('/@example\..*/', '@barbatos.com', $this->faker->unique()->safeEmail),
            'email_verified_at' => now(),
            'password' => bcrypt('12345'), // password
            'gender' => $genderRandom,
            'birthdate' => $this->faker->dateTimeBetween('1960-01-01', '2022-12-31'),
            'country' => $this->faker->country(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
