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

        $numberStoreBrand= rand(40,80);

        StoreBrand::factory($numberStoreBrand)->create()->each( function( $storeBrand ){

            Store::factory(rand(1,6))->has(StoreAddress::factory())->create([
                'store_brand_id' => $storeBrand->id
            ]);

        });

    }
}
