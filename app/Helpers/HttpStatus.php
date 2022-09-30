<?php
namespace App\Helpers;

class HttpStatus
{
    const HTTP_OK = 200;
    const HTTP_ERROR = 400;
    const HTTP_VALIDATION_ERROR = 422;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_Bad_Gateway_ERROR = 502;
}
