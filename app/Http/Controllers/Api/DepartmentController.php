<?php

namespace App\Http\Controllers\Api;

use App\Department;
use App\Transformers\DepartmentTransformer;
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
        return DepartmentTransformer::transform(Department::all());
    }

    /**
     * Get a Specific Department
     * @param Department $department
     * @return mixed
     */
    public function show(Department $department)
    {
        $includes = explode(',', request('include'));

        return DepartmentTransformer::transform($department, $includes);
    }
}
