<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductStore;

use App\Models\Product;
use App\Models\Store;


class ProductStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $products= Product::all();
        $stores= Store::all();

        foreach($stores as $store){

            $qtd= rand(20, 200);

            for($i=0; $i < $qtd; $i++){

                $product= $products->random();

                ProductStore::factory(1)->create([

                    'store_id' => $store->id,
                    'product_id' => $product->id,
                
                ]);

            }

        }

    }
}
