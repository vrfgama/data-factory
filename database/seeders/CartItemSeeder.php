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
        

        $stores->each( function( $store ) use($users) {

            $user= $users->random();
            $qtdItens= rand(5,15);
            $ps= ProductStore::where('store_id', $store->id)->get();
            $cart= CartItem::latest('id')->value('id') + 1;

            for($i=0; $i < $qtdItens; $i++){

                $product_store= $ps->random();
                
                CartItem::factory()->create([
                    'id'=> $cart,
                    'user_id'=> $user->id,
                    'product_store_id' => $product_store->id,
                    'price'=> $product_store->price,
                ]);
            }
        } );

    }
}