<?php

namespace Database\Seeders;

use App\Models\StoreAddress;
use App\Models\StoreBrand;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $count= 500;

        for($i=0; $i < $count; $i++){

            $rand= rand(1,6);

            StoreBrand::factory(1)
                ->has(Store::factory(rand(1,6))
                    ->has(StoreAddress::factory(1)))
            ->create();

        }
        */


        StoreBrand::factory(50)->create()->each( function( $storeBrand ){

            Store::factory(rand(1,6))->has(StoreAddress::factory())->create([
                'store_brand_id' => $storeBrand->id
            ]);

        });

    }
}
