<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    public $timestamps = false;

    const LOCK = 0; // 停用
    const NORMAL = 1; // 啟用
}
