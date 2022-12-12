<?php

namespace App\Repository;

use App\Models\TaskItem;

class TaskItemRepository
{
    static public function get($id)
    {
        return TaskItem::find($id);
    }

    static public function getAll()
    {
        return TaskItem::all()->toArray();
    }

    static public function getItemsByGroupID($group_id)
    {
        return TaskItem::where('group_id', $group_id)->get()->toArray();
    }
}
