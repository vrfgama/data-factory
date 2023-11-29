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

        $numberUser= rand(80,160);

        User::factory($numberUser)->create()->each( function( $user ){

            UserAddress::factory( rand(1,4) )->create([
                'user_id' => $user->id
            ]);

            CreditCard::factory( rand(1,3) )->create([
                'user_id' => $user->id
            ]);

        } );
        
    }
}
