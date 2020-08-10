<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendResponse($data, int $code, $status=200)
    {
        $payload = [
            "status" => "success",
            "statusCode" => $code,
            "data" => $data
        ];

        return response()->json($payload, $status);
    }

    protected function errorResponse($error, int $code, $status=500)
    {
        $payload = [
            "status" => "error",
            "statusCode" => $code,
            "data" => $error
        ];

        return response()->json($payload, $status);
    }
}
