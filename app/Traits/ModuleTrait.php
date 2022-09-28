<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ModuleTrait
{
    protected function setModuleName($module_name)
    {
        $this->module_name = $module_name;
    }

    protected function initModel()
    {
        $module = Str::lower($this->module_name);
        $module = Str::singular($module);
        $module = Str::camel($module);
        $module = Str::ucfirst($module);
        if (in_array($module, $this->expectedModules())) {
            return false;
        }
        $namespace = 'App\\' . $module;
        $this->model = new $namespace;
    }

    protected function expectedModules()
    {
        return ['Contact'];
    }
}
