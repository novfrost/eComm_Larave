<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Apple',
                'price'=>'500',
                'description'=>'Apple smartphone',
                'category'=>'Smartphone',
                'gallery'=>'https://images.unsplash.com/photo-1530319067432-f2a729c03db5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aXBob25lfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name'=>'Samsung mobile',
                'price'=>'600',
                'description'=>'A smartphone',
                'category'=>'Smartphone',
                'gallery'=>'https://images.unsplash.com/photo-1522562888039-65d4059f6431?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
            ],
            [
                'name'=>'Hawei mobile',
                'price'=>'400',
                'description'=>'A smartphone',
                'category'=>'Smartphone',
                'gallery'=>'https://images.unsplash.com/photo-1602453714579-55f0ad8a17fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ]
        ]);
    }
}
