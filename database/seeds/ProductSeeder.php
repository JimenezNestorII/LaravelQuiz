<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
           'product_name' => 'Wine',
           'product_description' => 'Made from fermented grapes',
           'price' => 250,
           'status' => 'Available'
        ]);
       DB::table('products')->insert([
            'product_name' => 'Milk',
            'product_description' => 'Harvested from Cows',
            'price' => 85,
            'status' => 'Available'
        ]);
        DB::table('products')->insert([
        'product_name' => 'Water',
        'product_description' => 'Bottled Mineral Water',
        'price' => 15,
        'status' => 'Out of Stock'
        ]);
    }
}
