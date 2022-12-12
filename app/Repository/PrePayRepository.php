<?php

namespace App\Repository;

use App\Models\PrePay;

class PrePayRepository
{
    static public function get($id)
    {
        return PrePay::find($id);
    }

    static public function getAll()
    {
        return PrePay::all()->toArray();
    }
}
