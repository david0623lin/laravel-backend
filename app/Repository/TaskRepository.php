<?php

namespace App\Repository;

use App\Models\Task;

class TaskRepository
{
    const NO_BROADCAST = 0; // 未推播
    const BROADCAST = 1; // 推播
    const CLOSE = 0;  // 已關閉
    const OPEN = 1; // 開放中
    const CANCEL = 2; // 已取消

    static public function get($id)
    {
        return Task::find($id);
    }

    static public function getAll()
    {
        return Task::all()->toArray();
    }

    static public function add($datas)
    {
        $datas['created_at'] = date('Y-m-d H:i:s');
        $datas['updated_at'] = date('Y-m-d H:i:s');

        return Task::insertGetId($datas);
    }
}
