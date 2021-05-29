<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\orderModel;
use Carbon\Carbon;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        orderModel::insert([
            [
                'barcode' => 1111,
                'jumlah' => 7,
                'total_harga' => 180.00,
                'ready' => 1,
                'onhold' => 1,
                'delivered' => 1,
                'packing' => 1,
                'sent' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'barcode' => 1112,
                'jumlah' => 4,
                'total_harga' => 40.00,
                'ready' => 1,
                'onhold' => 0,
                'delivered' => 2,
                'packing' => 1,
                'sent' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
