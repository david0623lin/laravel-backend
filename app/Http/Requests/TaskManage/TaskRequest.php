<?php

namespace App\Http\Requests\TaskManage;

use App\Http\Requests\BaseRequest;

class TaskRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'group_id' => 'required|integer',
            'item_id' => 'required|integer',
            'pre_pay_id' => 'required|integer',
            'title' => 'required|string|max:30',
            'content' => 'required|string|max:100',
            'need_count' => 'required|integer|between:1,5', // 一個案子最多五個人
            'give_id' => 'required|integer',
            'city' => 'string',
            'area' => 'string',
        ];
    }

    public function attributes()
    {
        return [
            'group_id' => 'group_id',
            'item_id' => 'item_id',
            'pre_pay_id' => 'pre_pay_id',
            'title' => 'title',
            'content' => 'content',
            'need_count' => 'need_count',
            'give_id' => 'give_id',
        ];
    }
}
