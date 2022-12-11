<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskGroupsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => '程式'],
            ['name' => '攝影'],
            ['name' => '家教'],
        ];

        foreach ($datas as $key => $value) {
            $datas[$key]['created_at'] = date('Y-m-d H:i:s');
            $datas[$key]['updated_at'] = date('Y-m-d H:i:s');
        }
        DB::table('task_groups')->insert($datas);
    }
}
