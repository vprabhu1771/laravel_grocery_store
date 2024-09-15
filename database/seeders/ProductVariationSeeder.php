<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductVariation;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sugar = Product::where('name', 'Sugar')->first();

        $rice = Product::where('name', 'Rice')->first();

        $salt = Product::where('name', 'Salt')->first();

        $wheat_flour = Product::where('name', 'Wheat Flour')->first();

        $sunflower_oil = Product::where('name', 'Sunflower Oil')->first();

        $variations = [
            // Add variations for Sugar
            [
                'product_id' => $sugar->id,
                'unit' => '250g', 
                'price' => 13.00, 
                'unit_weight' => 0.250
            ],
            [
                'product_id' => $sugar->id,
                'unit' => '500g', 
                'price' => 25.00, 
                'unit_weight' => 0.500
            ],
            [
                'product_id' => $sugar->id,
                'unit' => '1kg', 
                'price' => 50.00, 
                'unit_weight' => 1.000
            ],
            [
                'product_id' => $sugar->id,
                'unit' => '2kg', 
                'price' => 100.00, 
                'unit_weight' => 2.000
            ],

            // Add variations for Rice
            [
                'product_id' => $rice->id,
                'unit' => '1kg', 
                'price' => 60.00, 
                'unit_weight' => 1.000
            ],
            [
                'product_id' => $rice->id,
                'unit' => '5kg', 
                'price' => 290.00, 
                'unit_weight' => 5.000
            ],
            [
                'product_id' => $rice->id,
                'unit' => '10kg', 
                'price' => 570.00, 
                'unit_weight' => 10.000
            ],

            // Add variations for Salt
            [
                'product_id' => $salt->id,
                'unit' => '500g', 
                'price' => 10.00,
                'unit_weight' => 0.500
            ],
            [
                'product_id' => $salt->id,
                'unit' => '1kg', 
                'price' => 18.00, 
                'unit_weight' => 1.000
            ],

            // Add variations for Wheat Flour
            [
                'product_id' => $wheat_flour->id,
                'unit' => '1kg', 
                'price' => 40.00, 
                'unit_weight' => 1.000
            ],
            [
                'product_id' => $wheat_flour->id,
                'unit' => '5kg', 
                'price' => 190.00, 
                'unit_weight' => 5.000
            ],

            // Add variations for Cooking Oil
            [
                'product_id' => $sunflower_oil->id,
                'unit' => '1L', 
                'price' => 120.00, 
                'unit_weight' => 1.000
            ],
            [
                'product_id' => $sunflower_oil->id,
                'unit' => '5L', 
                'price' => 590.00, 
                'unit_weight' => 5.000
            ],
        ];

        foreach ($variations as $row) 
        {
            ProductVariation::create($row);
        }  
    }
}
