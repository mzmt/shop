<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        $items = ['コップ', 'フォーク', 'メガネ'];

        foreach ($items as $item) {
            DB::table('items')->insert([
                'name' => $item,
                'description' => '販売中の商品です',
                'price' => 690,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
