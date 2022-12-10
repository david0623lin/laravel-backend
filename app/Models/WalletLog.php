<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletLog extends Model
{
    protected $table = 'wallet_logs';
    public $timestamps = false;

    const OUT = 0; // 出款
    const IN = 1; // 入款
}
