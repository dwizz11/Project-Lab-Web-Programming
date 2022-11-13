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
            'productname' => "Recycled Wooden Ball",
            'productslug' => Str::slug('Recycled Wooden Ball'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 889935,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Wooden Bacon",
            'productslug' => Str::slug('Ergonomic Wooden Bacon'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 1033511,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Licensed Granite Chair",
            'productslug' => Str::slug('Licensed Granite Chair'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1035491,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Granite Salad",
            'productslug' => Str::slug('Electronic Granite Salad'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 711219,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Frozen Keyboard",
            'productslug' => Str::slug('Recycled Frozen Keyboard'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 1332917,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Steel Car",
            'productslug' => Str::slug('Recycled Steel Car'),
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 326878,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Refined Granite Gloves",
            'productslug' => Str::slug('Refined Granite Gloves'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1328392,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Refined Soft Chair",
            'productslug' => Str::slug('Refined Soft Chair'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1168592,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Soft Table",
            'productslug' => Str::slug('Oriental Soft Table'),
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 836188,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Soft Fish",
            'productslug' => Str::slug('Modern Soft Fish'),
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 635209,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Refined Bronze Pizza",
            'productslug' => Str::slug('Refined Bronze Pizza'),
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1951141,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Handmade Steel Sausages",
            'productslug' => Str::slug('Handmade Steel Sausages'),
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 156879,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Frozen Chicken",
            'productslug' => Str::slug('Intelligent Frozen Chicken'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1634921,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Soft Soap",
            'productslug' => Str::slug('Recycled Soft Soap'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 592056,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Recycled Metal Towels",
            'productslug' => Str::slug('Recycled Metal Towels'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1568359,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Rustic Metal Gloves",
            'productslug' => Str::slug('Rustic Metal Gloves'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1193794,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Small Fresh Ball",
            'productslug' => Str::slug('Small Fresh Ball'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 263198,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Wooden Ball",
            'productslug' => Str::slug('Modern Wooden Ball'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1882888,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Bronze Towels",
            'productslug' => Str::slug('Sleek Bronze Towels'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 610479,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Metal Mouse",
            'productslug' => Str::slug('Luxurious Metal Mouse'),
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 363139,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Fresh Shoes",
            'productslug' => Str::slug('Oriental Fresh Shoes'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1248366,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Electronic Concrete Bike",
            'productslug' => Str::slug('Electronic Concrete Bike'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1661011,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Granite Tuna",
            'productslug' => Str::slug('Intelligent Granite Tuna'),
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 632460,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Metal Salad",
            'productslug' => Str::slug('Bespoke Metal Salad'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1991393,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Soft Keyboard",
            'productslug' => Str::slug('Fantastic Soft Keyboard'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 635437,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Fresh Tuna",
            'productslug' => Str::slug('Tasty Fresh Tuna'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 695207,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Gorgeous Wooden Table",
            'productslug' => Str::slug('Gorgeous Wooden Table'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 300291,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Granite Pants",
            'productslug' => Str::slug('Handcrafted Granite Pants'),
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1055081,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Fresh Fish",
            'productslug' => Str::slug('Modern Fresh Fish'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 61517,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Rubber Tuna",
            'productslug' => Str::slug('Bespoke Rubber Tuna'),
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1369942,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Steel Soap",
            'productslug' => Str::slug('Oriental Steel Soap'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 949403,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Luxurious Frozen Chair",
            'productslug' => Str::slug('Luxurious Frozen Chair'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 440616,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Generic Granite Fish",
            'productslug' => Str::slug('Generic Granite Fish'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 646635,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Bronze Soap",
            'productslug' => Str::slug('Oriental Bronze Soap'),
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 1104498,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Rubber Ball",
            'productslug' => Str::slug('Sleek Rubber Ball'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1489492,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Cotton Ball",
            'productslug' => Str::slug('Incredible Cotton Ball'),
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 334059,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Small Cotton Chair",
            'productslug' => Str::slug('Small Cotton Chair'),
            'productdesc' => "Carbonite web goalkeeper gloves are ergonomically designed to give easy fit",
            'price' => 1380981,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Handmade Fresh Keyboard",
            'productslug' => Str::slug('Handmade Fresh Keyboard'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 875746,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Unbranded Steel Tuna",
            'productslug' => Str::slug('Unbranded Steel Tuna'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 1511697,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Rustic Metal Fish",
            'productslug' => Str::slug('Rustic Metal Fish'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1904508,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Bronze Shoes",
            'productslug' => Str::slug('Bespoke Bronze Shoes'),
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 1683564,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Fresh Pizza",
            'productslug' => Str::slug('Sleek Fresh Pizza'),
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 773220,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Frozen Table",
            'productslug' => Str::slug('Tasty Frozen Table'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 138683,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Bronze Tuna",
            'productslug' => Str::slug('Handcrafted Bronze Tuna'),
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 462228,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Soft Keyboard",
            'productslug' => Str::slug('Intelligent Soft Keyboard'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 353955,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Modern Fresh Keyboard",
            'productslug' => Str::slug('Modern Fresh Keyboard'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1512432,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Rustic Plastic Ball",
            'productslug' => Str::slug('Rustic Plastic Ball'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 1936986,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Tasty Steel Keyboard",
            'productslug' => Str::slug('Tasty Steel Keyboard'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 685105,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Rubber Cheese",
            'productslug' => Str::slug('Oriental Rubber Cheese'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1239847,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Practical Bronze Tuna",
            'productslug' => Str::slug('Practical Bronze Tuna'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1109583,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Cotton Chips",
            'productslug' => Str::slug('Incredible Cotton Chips'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 1469070,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Awesome Granite Mouse",
            'productslug' => Str::slug('Awesome Granite Mouse'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 433858,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Unbranded Metal Soap",
            'productslug' => Str::slug('Unbranded Metal Soap'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 1015802,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Rubber Pizza",
            'productslug' => Str::slug('Intelligent Rubber Pizza'),
            'productdesc' => "The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive",
            'price' => 567708,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Rubber Table",
            'productslug' => Str::slug('Handcrafted Rubber Table'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1268842,
            'category_id' => 3
            ]);
            DB::table('products')->insert([
            'productname' => "Elegant Wooden Gloves",
            'productslug' => Str::slug('Elegant Wooden Gloves'),
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 1458322,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Small Cotton Pizza",
            'productslug' => Str::slug('Small Cotton Pizza'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 675290,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Generic Wooden Shirt",
            'productslug' => Str::slug('Generic Wooden Shirt'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 698130,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Granite Pizza",
            'productslug' => Str::slug('Incredible Granite Pizza'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 524837,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Incredible Soft Chips",
            'productslug' => Str::slug('Incredible Soft Chips'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 317554,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Granite Cheese",
            'productslug' => Str::slug('Oriental Granite Cheese'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 639017,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Concrete Chicken",
            'productslug' => Str::slug('Handcrafted Concrete Chicken'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1592667,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Rubber Pizza",
            'productslug' => Str::slug('Oriental Rubber Pizza'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1955801,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Awesome Cotton Gloves",
            'productslug' => Str::slug('Awesome Cotton Gloves'),
            'productdesc' => "The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality",
            'price' => 457319,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Handcrafted Frozen Chips",
            'productslug' => Str::slug('Handcrafted Frozen Chips'),
            'productdesc' => "The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design",
            'price' => 1450679,
            'category_id' => 5
            ]);
            DB::table('products')->insert([
            'productname' => "Sleek Bronze Cheese",
            'productslug' => Str::slug('Sleek Bronze Cheese'),
            'productdesc' => "The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J",
            'price' => 715416,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Intelligent Granite Hat",
            'productslug' => Str::slug('Intelligent Granite Hat'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 1725846,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Ergonomic Fresh Hat",
            'productslug' => Str::slug('Ergonomic Fresh Hat'),
            'productdesc' => "The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients",
            'price' => 314414,
            'category_id' => 4
            ]);
            DB::table('products')->insert([
            'productname' => "Elegant Fresh Shoes",
            'productslug' => Str::slug('Elegant Fresh Shoes'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1808293,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Gorgeous Soft Bike",
            'productslug' => Str::slug('Gorgeous Soft Bike'),
            'productdesc' => "Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals",
            'price' => 971382,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Fantastic Bronze Salad",
            'productslug' => Str::slug('Fantastic Bronze Salad'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 628105,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Small Granite Cheese",
            'productslug' => Str::slug('Small Granite Cheese'),
            'productdesc' => "Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support",
            'price' => 1597852,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Oriental Granite Keyboard",
            'productslug' => Str::slug('Oriental Granite Keyboard'),
            'productdesc' => "The Football Is Good For Training And Recreational Purposes",
            'price' => 171469,
            'category_id' => 2
            ]);
            DB::table('products')->insert([
            'productname' => "Bespoke Soft Soap",
            'productslug' => Str::slug('Bespoke Soft Soap'),
            'productdesc' => "New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart",
            'price' => 510320,
            'category_id' => 1
            ]);
            DB::table('products')->insert([
            'productname' => "Rustic Steel Chair",
            'productslug' => Str::slug('Rustic Steel Chair'),
            'productdesc' => "Boston's most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles",
            'price' => 746232,
            'category_id' => 3
            ]);
        

    }
}
