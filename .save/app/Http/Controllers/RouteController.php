<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public static function include_route_files($dir)
    {
        foreach (glob($dir . '/*.php') as $filename) {
            require_once $filename;
        }
    }
}
