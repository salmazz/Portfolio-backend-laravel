<?php

namespace App\Services;

use App\Traits\ModuleTrait;
use App\Traits\ResponseTrait;

class ModuleService{

    use ResponseTrait, ModuleTrait;

    protected $module_name;

    protected $model;

    public function getModuleData($module_name){
        try {
            $this->setModuleName($module_name);
            $check = $this->initModel();
            if($check === false){
                return $this->youCantAccess();
            }
            $data = $this->model->paginate(10);
            return $this->successWithData($data);
        }catch (\Exception $e){
            return $this->errorResponse($e->getMessage());
        }
    }

    public function getById($module_name, $id){
        try {
            $this->setModuleName($module_name);
            $check = $this->initModel();
            if($check === false){
                return $this->youCantAccess();
            }
            $data = $this->model->find($id);
            if($data){
                return $this->successWithData($data);
            }
            return $this->res([],false,'you cant find this id');
        }catch (\Exception $e){
            return $this->errorResponse($e->getMessage());
        }
    }
}
