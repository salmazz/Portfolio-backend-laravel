<?php

namespace App\Services;

use App\Helpers\HttpStatus;
use App\Models\Contact;
use App\Traits\ResponseTrait;

class ContactService
{
    use ResponseTrait;

    function storeContact($request)
    {
        $v = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|min:2|max:50|string',
            'email' => 'required|min:2|max:50|email',
            'mobile' => 'required|min:5|max:20',
            'message' => 'required|min:5|max:500|string',
        ]);

        if ($v->fails()) {
            return $this->res($v->errors(), false, 'we got an error',HttpStatus::HTTP_ERROR);
        }
        Contact::create($request->all());
        return $this->res([], true, 'thanks for sent your message we will be in touch soon', HttpStatus::HTTP_OK);
    }
}
