<?php

namespace App\Http\Controllers\Api;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentController
 * @package App\Http\Controllers\Api
 * @resource Departments
 */
class DepartmentController extends Controller
{
    /**
     * Get All Departments
     */
    public function index()
    {
        return Department::all();
    }

    /**
     * Get a Specific Department
     */
    public function show(Department $department)
    {
        return $department;
    }
}
