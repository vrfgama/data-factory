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
        
        $categories = Category::factory(100)->create();

        ProductBrand::factory(90)->create()->each(function ($productBrand) use ($categories) {

            $numberOfProducts = rand(1, 500);

            Product::factory($numberOfProducts)->create([
                'product_brand_id' => $productBrand->id,
                'category_id' => $categories->random()->id,
            ]);
        });

    }
}
