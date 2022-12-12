<?php

namespace App\Traits;

trait Response
{
    public static function success($content)
    {
        $data = [
            'code' => 200,
            'message' => 'Success',
            'datas' => $content,
        ];
        return response()->json($data, 200);
    }

    public static function error($httpCode, $errorCode, $message, $content = [])
    {
        $data = [
            'code' => $errorCode,
            'message' => $message,
            'datas' => $content,
        ];
        return response()->json($data, $httpCode);
    }
}
