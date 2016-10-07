<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

class RouteHelper
{

    public static function set_active($route)
    {
        $path = Request::path();
        if ($path == "/") {
            $path = 'index';
        }
        return ($path == $route ? "active" : '');
    }
}