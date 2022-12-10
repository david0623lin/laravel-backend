<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    public $timestamps = false;

    const NO_BROADCAST = 0; // 未推播
    const BROADCAST = 1; // 推播
    const CLOSE = 0;  // 已關閉
    const OPEN = 1; // 開放中
    const CANCEL = 2; // 已取消
}
