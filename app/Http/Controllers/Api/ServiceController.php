<?php

namespace App\Http\Controllers\Api;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        return $service;
    }
}
