<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $table = 'credits';
    public $timestamps = false;

    const NO_PASS = 0; // 未通過
    const PASS = 1; // 通過
}
