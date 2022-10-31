<?php

namespace Database\Factories;

use App\Models\product;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Builder;

class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productname = $this->faker->unique()->word();
        // $table = product::where('productname','=',$productname)->get();

        // try {
        //     while(count($table) > 0){
        //         $productname = $this->faker->productName;
        //     }
        // } catch (Exception $e) {
        //     echo "Error";
        // }

        

        return [
            'productname' => $productname,
            'productslug' => Str::slug($productname),
            'productdesc' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(50000, 2000000),
            'category_id' => $this->faker->numberBetween(1, 5)
           
        ];
    }
}
