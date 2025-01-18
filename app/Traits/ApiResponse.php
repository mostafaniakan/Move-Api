<?php

namespace App\Traits;



trait ApiResponse
{
    protected function successResponse($message = null, $data, $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'code' => $code,
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }
    protected function errorResponse($message=null,$code): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ],$code);
    }
}
