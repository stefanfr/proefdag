<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_information')->insert([
            'product_name' => str_random(10),
            'sku' => str_random(2) . random_int(1000, 9999) . str_random(2) . random_int(10, 99),
            'ean' => random_int(0, 99),
            'price' => random_int(0, 999) / 100,
            'brand' => str_random(20),
            'size' => random_int(0, 10) * 100,
            'stock' => random_int(0, 1000)
        ], 50);
    }
}
