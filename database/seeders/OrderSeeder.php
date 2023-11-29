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
        
        $numberOrders = rand(200,300);
        
        for( $i=0; $i < $numberOrders; $i++ ){

            $order= Order::all();
            $cartItemRandom= CartItem::inRandomOrder()->first();

            if( ! $order->contains('cart_item_id', $cartItemRandom->id) ){

                $totalItens= CartItem::where('id', $cartItemRandom->id)->sum('amount');
                $cart= CartItem::where('id', $cartItemRandom->id)->get();
                $totalPrice= 0;

                foreach( $cart as $cart ){
                    $totalPrice+= $cart->amount * $cart->price;
                }

                Order::factory(1)->create([
                    'total_price'=> $totalPrice,
                    'total_itens'=> $totalItens,
                    'cart_item_id'=> $cart->id,
                ]);
            }

        }
    }
}
