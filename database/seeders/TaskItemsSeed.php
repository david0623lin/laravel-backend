<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskItemsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $test = ['type' => '', 'main' => '', 'text' => ''];
        // echo json_encode($test);

        $datas = [
            ['group_id' => 1, 'name' => '網頁設計'],
            ['group_id' => 1, 'name' => 'UI/UX設計'],
            ['group_id' => 1, 'name' => 'App開發'],
            ['group_id' => 2, 'name' => '婚禮紀錄攝影'],
            ['group_id' => 2, 'name' => '婚紗拍攝'],
            ['group_id' => 2, 'name' => '食物攝影'],
            ['group_id' => 2, 'name' => '網拍服飾攝影'],
            ['group_id' => 2, 'name' => '商業攝影'],
            ['group_id' => 3, 'name' => '程式語言家教'],
            ['group_id' => 3, 'name' => '語言家教'],
            ['group_id' => 3, 'name' => '才藝家教'],
        ];

        foreach ($datas as $key => $value) {
            $datas[$key]['created_at'] = date('Y-m-d H:i:s');
            $datas[$key]['updated_at'] = date('Y-m-d H:i:s');
        }
        DB::table('task_items')->insert($datas);
    }
}
