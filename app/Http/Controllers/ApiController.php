<?php

namespace App\Http\Controllers;

use App\Services\contactService;
use App\Services\moduleService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $contactService;
    protected $moduleService;

    public function __construct(contactService $contactService, moduleService $moduleService)
    {
        $this->contactService = $contactService;
        $this->moduleService = $moduleService;
    }

    public function index($module_name)
    {
        return $this->moduleService->getModuleData($module_name);
    }

    public function getById($module_name, $id)
    {
        return $this->moduleService->getById($module_name, $id);
    }

    public function storeContact(Request $request)
    {
        return $this->contactService->storeContact($request);
    }
}

