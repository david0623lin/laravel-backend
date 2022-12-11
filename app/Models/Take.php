<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    protected $table = 'takes';
    public $timestamps = false;

    const WAIT = 0; // 未讀取
    const READ = 1; // 已讀取
    const CHOOSE = 2; // 已選擇
    const BACK = 3; // 已退款
    const SYSTEM = 4; // 系統退款
}
