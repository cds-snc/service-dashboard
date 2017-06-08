<?php

namespace App\Http\Controllers\Api\Charts;

use App\Department;
use App\Transformers\DepartmentServiceVolumeTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DepartmentProgramController extends Controller
{
    public function serviceVolume(Department $department)
    {
        // get the transformed data since we've already done the heavy lifting
        $data = DepartmentServiceVolumeTransformer::transform($department->programs);

        Excel::create('department_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }
}
