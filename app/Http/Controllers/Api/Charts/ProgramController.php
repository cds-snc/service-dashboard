<?php

namespace App\Http\Controllers\Api\Charts;


use App\Http\Controllers\Controller;
use App\Program;
use App\Transformers\Charts\ServiceVolumeTransformer;
use Maatwebsite\Excel\Facades\Excel;

class ProgramController extends Controller
{
    public function serviceVolume(Program $program = null)
    {
        if (!$program->exists) {
            $program = $program->all();
        }

        // get the transformed data since we've already done the heavy lifting
        $data = ServiceVolumeTransformer::transform($program);

        Excel::create('program_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }
}