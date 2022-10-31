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

        // // Camera
        // DB::table('products')->insert([
        //     'productname' => 'FujiFilm Xt1',
        //     'productslug' =>Str::slug('FujiFilm Xt1'),
        //     'productdesc' => 'Camera with best lowlight sensor',
        //     'price' => 12000000,
        //     'category_id' => 1
        // ]);

        

        // DB::table('products')->insert([
        //     'productname' => 'Sony A7000',
        //     'productslug' =>Str::slug('Sony A7000'),
        //     'productdesc' => 'Camera with best shutter speed sensor',
        //     'price' => 1500000,
        //     'category_id' => 1
        // ]);



        // // Beauty
        

        // DB::table('products')->insert([
        //     'productname' => 'Loreal Paris',
        //     'productslug' =>Str::slug('Loreal Paris') . '2',
        //     'productdesc' => 'Cream to whitening your skin',
        //     'price' => 42000,
        //     'category_id' => 2
        // ]);

        // DB::table('products')->insert([
        //     'productname' => 'Loreal Paris',
        //     'productslug' =>Str::slug('Loreal Paris') . '3',
        //     'productdesc' => 'Cream to whitening your skin',
        //     'price' => 42000,
        //     'category_id' => 2
        // ]);

        // DB::table('products')->insert([
        //     'productname' => 'Loreal Paris',
        //     'productslug' =>Str::slug('Loreal Paris') . '4',
        //     'productdesc' => 'Cream to whitening your skin',
        //     'price' => 42000,
        //     'category_id' => 2
        // ]);


        DB::table('products')->insert([
            'productname' => "Oriental Frozen Cheese",
            'productslug' => "Str::slug('Oriental Frozen Cheese')",
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1385912,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Granite Cheese",
            'productslug' => "Str::slug('Recycled Granite Cheese')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1048507,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Granite Gloves",
            'productslug' => "Str::slug('Sleek Granite Gloves')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1609793,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Concrete Pants",
            'productslug' => "Str::slug('Ergonomic Concrete Pants')",
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 110414,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Steel Car",
            'productslug' => "Str::slug('Handcrafted Steel Car')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1187958,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Practical Cotton Chicken",
            'productslug' => "Str::slug('Practical Cotton Chicken')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1266880,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Unbranded Concrete Bacon",
            'productslug' => "Str::slug('Unbranded Concrete Bacon')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 130322,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Elegant Steel Bacon",
            'productslug' => "Str::slug('Elegant Steel Bacon')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1317483,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Plastic Hat",
            'productslug' => "Str::slug('Electronic Plastic Hat')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 413461,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Rubber Fish",
            'productslug' => "Str::slug('Intelligent Rubber Fish')",
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 888521,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Fresh Ball",
            'productslug' => "Str::slug('Luxurious Fresh Ball')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 598937,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Rubber Salad",
            'productslug' => "Str::slug('Recycled Rubber Salad')",
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1071193,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Wooden Mouse",
            'productslug' => "Str::slug('Licensed Wooden Mouse')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1014929,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Fresh Tuna",
            'productslug' => "Str::slug('Handcrafted Fresh Tuna')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 548528,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Soft Keyboard",
            'productslug' => "Str::slug('Luxurious Soft Keyboard')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1948102,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Rustic Frozen Tuna",
            'productslug' => "Str::slug('Rustic Frozen Tuna')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 961843,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Cotton Pizza",
            'productslug' => "Str::slug('Fantastic Cotton Pizza')",
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1257002,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Fresh Chair",
            'productslug' => "Str::slug('Licensed Fresh Chair')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1294697,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Generic Concrete Car",
            'productslug' => "Str::slug('Generic Concrete Car')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1832179,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Cotton Shirt",
            'productslug' => "Str::slug('Licensed Cotton Shirt')",
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1030314,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Refined Fresh Keyboard",
            'productslug' => "Str::slug('Refined Fresh Keyboard')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 591198,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Plastic Chair",
            'productslug' => "Str::slug('Ergonomic Plastic Chair')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1595256,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Bronze Tuna",
            'productslug' => "Str::slug('Intelligent Bronze Tuna')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 448660,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Frozen Bacon",
            'productslug' => "Str::slug('Sleek Frozen Bacon')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1646651,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Small Concrete Hat",
            'productslug' => "Str::slug('Small Concrete Hat')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 701602,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Awesome Wooden Table",
            'productslug' => "Str::slug('Awesome Wooden Table')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 214682,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Practical Plastic Keyboard",
            'productslug' => "Str::slug('Practical Plastic Keyboard')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 387913,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Handmade Cotton Bike",
            'productslug' => "Str::slug('Handmade Cotton Bike')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1061045,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Steel Shoes",
            'productslug' => "Str::slug('Ergonomic Steel Shoes')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 258504,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Steel Gloves",
            'productslug' => "Str::slug('Fantastic Steel Gloves')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1954485,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Granite Pants",
            'productslug' => "Str::slug('Intelligent Granite Pants')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1391927,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Unbranded Frozen Ball",
            'productslug' => "Str::slug('Unbranded Frozen Ball')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 819934,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Wooden Tuna",
            'productslug' => "Str::slug('Electronic Wooden Tuna')",
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 114302,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Gorgeous Fresh Pants",
            'productslug' => "Str::slug('Gorgeous Fresh Pants')",
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 1077444,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Cotton Salad",
            'productslug' => "Str::slug('Modern Cotton Salad')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 1784302,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Granite Towels",
            'productslug' => "Str::slug('Incredible Granite Towels')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1203223,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Rubber Car",
            'productslug' => "Str::slug('Intelligent Rubber Car')",
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1953606,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Small Concrete Sausages",
            'productslug' => "Str::slug('Small Concrete Sausages')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 1733961,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Concrete Shirt",
            'productslug' => "Str::slug('Handcrafted Concrete Shirt')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 581993,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Small Rubber Gloves",
            'productslug' => "Str::slug('Small Rubber Gloves')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1807442,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Granite Chair",
            'productslug' => "Str::slug('Oriental Granite Chair')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1352302,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Generic Wooden Bacon",
            'productslug' => "Str::slug('Generic Wooden Bacon')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 1419180,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Rubber Gloves",
            'productslug' => "Str::slug('Oriental Rubber Gloves')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 510172,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Plastic Bike",
            'productslug' => "Str::slug('Licensed Plastic Bike')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 678904,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Steel Mouse",
            'productslug' => "Str::slug('Incredible Steel Mouse')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1248648,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Granite Keyboard",
            'productslug' => "Str::slug('Oriental Granite Keyboard')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1315171,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Rubber Soap",
            'productslug' => "Str::slug('Handcrafted Rubber Soap')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1079189,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Concrete Sausages",
            'productslug' => "Str::slug('Luxurious Concrete Sausages')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1486218,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Small Metal Fish",
            'productslug' => "Str::slug('Small Metal Fish')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1315644,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Frozen Chips",
            'productslug' => "Str::slug('Fantastic Frozen Chips')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1675749,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Rubber Shirt",
            'productslug' => "Str::slug('Electronic Rubber Shirt')",
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1712202,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Wooden Car",
            'productslug' => "Str::slug('Modern Wooden Car')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1685329,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Unbranded Concrete Chair",
            'productslug' => "Str::slug('Unbranded Concrete Chair')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 463296,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Plastic Mouse",
            'productslug' => "Str::slug('Ergonomic Plastic Mouse')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1288687,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Soft Towels",
            'productslug' => "Str::slug('Luxurious Soft Towels')",
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 976536,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Gorgeous Fresh Chicken",
            'productslug' => "Str::slug('Gorgeous Fresh Chicken')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1308504,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Soft Bike",
            'productslug' => "Str::slug('Electronic Soft Bike')",
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 868889,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Fresh Hat",
            'productslug' => "Str::slug('Fantastic Fresh Hat')",
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 379806,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Steel Bike",
            'productslug' => "Str::slug('Tasty Steel Bike')",
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 77225,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Rubber Table",
            'productslug' => "Str::slug('Tasty Rubber Table')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1532765,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Refined Frozen Chicken",
            'productslug' => "Str::slug('Refined Frozen Chicken')",
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1138266,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Plastic Pants",
            'productslug' => "Str::slug('Fantastic Plastic Pants')",
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 352050,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Soft Towels",
            'productslug' => "Str::slug('Handcrafted Soft Towels')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 1906964,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Frozen Pizza",
            'productslug' => "Str::slug('Modern Frozen Pizza')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 513903,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Bronze Ball",
            'productslug' => "Str::slug('Licensed Bronze Ball')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 551433,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Plastic Gloves",
            'productslug' => "Str::slug('Oriental Plastic Gloves')",
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1052068,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Frozen Cheese",
            'productslug' => "Str::slug('Electronic Frozen Cheese')",
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1214965,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Granite Shoes",
            'productslug' => "Str::slug('Ergonomic Granite Shoes')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 997429,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Practical Granite Towels",
            'productslug' => "Str::slug('Practical Granite Towels')",
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 629749,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Metal Shirt",
            'productslug' => "Str::slug('Bespoke Metal Shirt')",
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 973571,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Concrete Pants",
            'productslug' => "Str::slug('Bespoke Concrete Pants')",
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 1372010,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Elegant Frozen Computer",
            'productslug' => "Str::slug('Elegant Frozen Computer')",
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1270557,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Soft Bacon",
            'productslug' => "Str::slug('Electronic Soft Bacon')",
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1126464,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Soft Mouse",
            'productslug' => "Str::slug('Handcrafted Soft Mouse')",
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 903388,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Fresh Hat",
            'productslug' => "Str::slug('Tasty Fresh Hat')",
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 1396653,
            'category_id' => 1
            ]);
        

    }
}
