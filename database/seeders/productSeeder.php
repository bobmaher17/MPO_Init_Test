<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productModel;
use Carbon\Carbon;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productModel::insert([
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 10.00,
                'status' => 'READY',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 20.00,
                'status' => 'DELIVERED',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 30.00,
                'status' => 'SENT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 10.00,
                'status' => 'ONHOLD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 20.00,
                'status' => 'PACKING',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 40.00,
                'status' => 'SENT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1111,
                'product_name' => 'APPLE',
                'price' => 50.00,
                'status' => 'SENT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1122,
                'product_name' => 'PINAPPLE',
                'price' => 10.00,
                'status' => 'READY',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1122,
                'product_name' => 'PINAPPLE',
                'price' => 10.00,
                'status' => 'DELIVERED',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1122,
                'product_name' => 'PINAPPLE',
                'price' => 10.00,
                'status' => 'PACKING',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1122,
                'product_name' => 'PINAPPLE',
                'price' => 10.00,
                'status' => 'DELIVERED',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
