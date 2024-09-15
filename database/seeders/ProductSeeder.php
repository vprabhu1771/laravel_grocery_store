<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'name' => 'Sugar',
                'description' => 'Fine white sugar, ideal for all types of cooking and beverages.',
            ],
            [
                'name' => 'Rice',
                'description' => 'Premium quality basmati rice for everyday meals.',
            ],
            [
                'name' => 'Salt',
                'description' => 'Refined iodized salt for daily use.',
            ],
            [
                'name' => 'Wheat Flour',
                'description' => 'Whole wheat flour, perfect for making soft chapatis.',
            ],
            [
                'name' => 'Sunflower Oil',
                'description' => 'Pure and healthy sunflower oil for everyday cooking.',
            ]
        ];

        foreach ($products as $row) 
        {
            Product::create($row);
        }    
    }
}
