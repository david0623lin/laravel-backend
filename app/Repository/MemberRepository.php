<?php

namespace App\Repository;

use App\Models\Member;

class MemberRepository
{
    static public function get($id)
    {
        return Member::find($id);
    }

    static public function getAll()
    {
        return Member::all()->toArray();
    }
}
