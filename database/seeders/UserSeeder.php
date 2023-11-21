<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CreditCard;
use App\Models\UserAddress;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*

        // primeira solução para criar registros aleatorios

        $count= 500;
        
        for($i=0; $i < $count; $i++){

            $rand= rand(1,4);
            $rand2= rand(1,3);

            User::factory(1)
                ->has( UserAddress::factory()->count($rand) )          
                ->has( CreditCard::factory()->count($rand2) )
            ->create();

        }
        */

        User::factory(200)->create()->each( function( $user ){

            UserAddress::factory( rand(1,4) )->create([
                'user_id' => $user->id
            ]);

            CreditCard::factory( rand(1,3) )->create([
                'user_id' => $user->id
            ]);

        } );
        
    }
}
