<?php

namespace App\Http\Controllers\Api\Charts;

use App\Department;
use App\Transformers\DepartmentCompletionRateTransformer;
use App\Transformers\Charts\ServiceVolumeTransformer;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DepartmentController extends Controller
{
    public function serviceVolume(Department $department = null)
    {
        if (!$department->exists) {
            $department = $department->all();
        }

        // get the transformed data since we've already done the heavy lifting
        $data = ServiceVolumeTransformer::transform($department);

        Excel::create('department_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }

    public function completion(Department $department = null)
    {
        if (!$department->exists) {
            $department = $department->all();
        }

        $data = DepartmentCompletionRateTransformer::transform($department);

        $data = array_sort($data, function($value) {
            return $value['completion'];
        });

        Excel::create('department_completion', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }
}
