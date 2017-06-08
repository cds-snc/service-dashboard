<?php

namespace App\Http\Controllers\Api;

use App\Department;
use App\Transformers\DepartmentTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ChartsController extends Controller
{
    public function departmentServiceVolume()
    {
        // get the transformed data since we've already done the heavy lifting
        $departments = DepartmentTransformer::transform(Department::all());

        $data = collect();

        foreach ($departments as $department) {
            $dept = [
                'name' => $department['name']
            ];

            foreach ($department['channel_volumes']['channels'] as $channel) {
                $dept[snake_case($channel['name'])] = $channel['outputs'] ?: 0;
            }

            $data->push($dept);
        }
        // return $data;

        Excel::create('department_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data->toArray());
            });
        })->export('csv');
    }
}