<?php

namespace App\Services\TaskManage;

use App\Exceptions\ApiException;
use App\Repository\TaskItemRepository;
use App\Repository\PrePayRepository;
use App\Repository\MemberRepository;
use App\Repository\TaskRepository;

class TaskService
{
    public function create($inputs)
    {
        $item = TaskItemRepository::get($inputs['item_id']);

        if (empty($item)) {
            throw new ApiException(config('exception.api.901'), 901);
        }

        if ($item['group_id'] != $inputs['group_id']) {
            throw new ApiException(config('exception.api.901'), 901);
        }

        $prePay = PrePayRepository::get($inputs['pre_pay_id']);

        if (empty($prePay)) {
            throw new ApiException(config('exception.api.901'), 901);
        }

        $give = MemberRepository::get($inputs['give_id']);

        if (empty($give)) {
            throw new ApiException(config('exception.api.901'), 901);
        }

        if (empty($inputs['city']) || empty($inputs['area'])) {
            $inputs['city'] = $give['city'];
            $inputs['area'] = $give['area'];
        }

        $params['group_id'] = (int) $inputs['group_id'];
        $params['item_id'] = (int) $inputs['item_id'];
        $params['city'] = $inputs['city'];
        $params['area'] = $inputs['area'];
        $params['pre_pay_id'] = (int) $inputs['pre_pay_id'];
        $params['need_count'] = (int) $inputs['need_count'];
        $params['amount'] = $prePay['amount'];
        $params['detail'] = json_encode(['title' => $inputs['title'], 'content' => $inputs['content']]);
        $params['have_read_count'] = 0;
        $params['read_count_limit'] = $inputs['need_count'] * 3;
        $params['give_id'] = (int) $give['give_id'];
        $params['new'] = TaskRepository::NO_BROADCAST;
        $params['status'] = TaskRepository::OPEN;
        $params['close_at'] = date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60));
        $insertID = TaskRepository::add($params);

        return TaskRepository::get($insertID);
    }
}
