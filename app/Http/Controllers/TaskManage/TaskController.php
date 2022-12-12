<?php

namespace App\Http\Controllers\TaskManage;

use App\Http\Controllers\Controller;
use App\Exceptions\ApiException;
use App\Traits\Response;
use App\Http\Requests\TaskManage\TaskRequest;
use App\Services\TaskManage\TaskService;

class TaskController extends Controller
{
    public function create(TaskRequest $taskRequest, TaskService $taskService)
    {
        $inputs = $taskRequest->only([
            'group_id',
            'item_id',
            'pre_pay_id',
            'title',
            'content',
            'need_count',
            'give_id',
            'city',
            'area',
        ]);

        try {
            $outputs = $taskService->create($inputs);
            return Response::success($outputs);
        } catch (ApiException $e) {
            return Response::error(400, $e->getCode(), $e->getMessage());
        } catch (\Exception $e) {
            return Response::error(500, -999, $e->getMessage());
        }
    }
}
