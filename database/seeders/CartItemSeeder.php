<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\ProductStore;
use App\Models\Store;
use App\Models\User;


class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users= User::all();
        $stores= Store::all();

        $qtd_cart= 300;

        for($i=0; $i < $qtd_cart; $i++ ){
            
            $qtd_itens= rand(5,15);
            $store= $stores->random();
            $ps= ProductStore::where('store_id', $store->id)->get();
            $user= $users->random();
            $cart= CartItem::latest('id')->value('id') + 1;


            for($j=0; $j<$qtd_itens; $j++){

                $product_store= $ps->random();
                
                CartItem::factory()->create([
                    'id'=> $cart,
                    'user_id'=> $user->id,
                    'product_store_id' => $product_store->id,
                    'price'=> $product_store->price,
                    //'amount'=> rand(1,5),
                ]);
            }     
        }
    }
}