<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'account' => 'Dev',
                'password' => '426bj4',
                'name' => '開發測試帳號',
                'sex' => 1,
                'city' => '台中市',
                'area' => '西屯區',
                'id_card' => 'A123456789',
                'birthday' => '2022/12/31',
                'mail' => 'Dev@gmail.com',
                'phone' => '0912345678',
                'line_id' => 'devID',
                'wallet' => 0,
                'status' => 1,
            ],
        ];

        foreach ($datas as $key => $value) {
            $datas[$key]['created_at'] = date('Y-m-d H:i:s');
            $datas[$key]['updated_at'] = date('Y-m-d H:i:s');
        }
        DB::table('members')->insert($datas);
    }
}
