<?php

namespace App\Http\Controllers\Api;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentProgramController
 * @package App\Http\Controllers\Api
 * @resource Departments
 */
class DepartmentProgramController extends Controller
{
    /**
     * Get Programs for a Department
     * @param Department $department
     * @return mixed
     */
    public function index(Department $department)
    {
        return $department->programs;
    }

}
