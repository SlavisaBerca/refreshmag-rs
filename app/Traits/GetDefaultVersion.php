<?php

namespace App\Traits;

use App\Models\AppSetting;

trait GetDefaultVersion
{
    public function defaultVersion()
    {
        $version = AppSetting::find(1) ? AppSetting::find(1)->default_version : 1;

        return $version;
    }
}