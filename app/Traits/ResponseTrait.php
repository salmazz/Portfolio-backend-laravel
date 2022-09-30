<?php

namespace App\Traits;

trait ResponseTrait
{
    protected function youCantAccess()
    {
        return $this->res([], false, 'you cant access this module ' . $this->module_name);
    }

    protected function successWithData($data)
    {
        return $this->res($data, true, 'here what we found in' . $this->module_name);

    }

    protected function errorResponse($e)
    {
        return $this->res([], false, $e);
    }

    protected function res($data = [], $status = true, $message= '', $code = '')
    {
        $data = [
            'payload' => $data,
            'status' => $status,
            'message' => $message,
            'code'    => $code
        ];
        return response()->json($data);
    }
}
