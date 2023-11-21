<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cart_item= CartItem::all();
        $qtd_order= rand(100,300);


        for( $i=0; $i < $qtd_order; $i++ ){

            $cartItemRandom= $cart_item->random();
            $cart= CartItem::where('id', $cartItemRandom->id)->get();
            $tt_item= $cart->sum('amount');
            $tt_price= 0;

            foreach($cart as $cart){
                $tt_price+= $cart->amount * $cart->price;
            }

            Order::factory(1)->create([
                'total_price'=> $tt_price,
                'total_itens'=> $tt_item,
                'cart_item_id'=> $cart->id,
            ]);

        }

    }
}
