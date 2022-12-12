<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrePaysSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['range' => '1000以下', 'amount' => 70, 'back_proportion' => 0.2],
            ['range' => '2000以下', 'amount' => 75, 'back_proportion' => 0.2],
            ['range' => '3000以下', 'amount' => 80, 'back_proportion' => 0.2],
            ['range' => '4000以下', 'amount' => 90, 'back_proportion' => 0.2],
            ['range' => '5000以下', 'amount' => 100, 'back_proportion' => 0.2],
            ['range' => '5000至10000', 'amount' => 110, 'back_proportion' => 0.2],
            ['range' => '10000至20000', 'amount' => 125, 'back_proportion' => 0.2],
            ['range' => '20000至30000', 'amount' => 140, 'back_proportion' => 0.2],
            ['range' => '30000至50000', 'amount' => 160, 'back_proportion' => 0.2],
            ['range' => '50000至100000', 'amount' => 200, 'back_proportion' => 0.2],
            ['range' => '100000以上', 'amount' => 250, 'back_proportion' => 0.2],
        ];

        foreach ($datas as $key => $value) {
            $datas[$key]['created_at'] = date('Y-m-d H:i:s');
            $datas[$key]['updated_at'] = date('Y-m-d H:i:s');
        }
        DB::table('pre_pays')->insert($datas);
    }
}
