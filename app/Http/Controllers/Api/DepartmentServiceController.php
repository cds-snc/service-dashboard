<?php

namespace App\Http\Controllers\Api;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentServiceController extends Controller
{
    public function index(Department $department)
    {
        return $department->services;
    }
}
