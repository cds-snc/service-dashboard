<?php

namespace App\Http\Controllers\Api\Charts;


use App\Program;
use App\Transformers\Charts\ServiceVolumeTransformer;
use Maatwebsite\Excel\Facades\Excel;

class ProgramServiceController
{
    public function serviceVolume(Program $program)
    {
        // get the transformed data since we've already done the heavy lifting
        $data = ServiceVolumeTransformer::transform($program->services);

        Excel::create('program_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }
}