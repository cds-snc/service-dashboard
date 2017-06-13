<?php

namespace App\Http\Controllers\Api\Charts;


use App\Service;
use App\Transformers\Charts\ServiceVolumeTransformer;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController
{
    public function serviceVolume(Service $service = null)
    {
        if (!$service->exists) {
            $service = $service->all();
        }

        // get the transformed data since we've already done the heavy lifting
        $data = ServiceVolumeTransformer::transform($service);

        Excel::create('program_service_volume', function ($excel) use ($data) {
            $excel->sheet('data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }
}