<?php 

namespace App\Traits;

trait Response {
    public function success($msg, $data = null, $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $msg,
            'data'    => $data,
            'code'    => $code,
        ], $code);
    }

    public function fail($msg, $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $msg,
            'data'    => null,
            'code'    => $code,
        ], $code);
    }
}