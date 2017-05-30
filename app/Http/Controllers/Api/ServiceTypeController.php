<?php

namespace App\Http\Controllers\Api;

use App\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceTypeController extends Controller
{
    public function index()
    {
        return ServiceType::all();
    }
}
