<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBrand;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $numberCategories= rand(50,100);
        $numberProductBrand= rand(80,160);

        $categories = Category::factory($numberCategories)->create();

        ProductBrand::factory($numberProductBrand)->create()->each(function ($productBrand) use ($categories) {

            $numberProducts = rand(1, 500);

            Product::factory($numberProducts)->create([
                'product_brand_id' => $productBrand->id,
                'category_id' => $categories->random()->id,
            ]);
        });

    }
}
