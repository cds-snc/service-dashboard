<?php

namespace App\Http\Controllers\Api;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentServiceController
 * @package App\Http\Controllers\Api
 * @resource Departments
 */
class DepartmentServiceController extends Controller
{
    /**
     * Get Services for a Department
     * @param Department $department
     * @return mixed
     */
    public function index(Department $department)
    {
        return $department->services;
    }
}
