<?php namespace App\Transformers;

use App\ChannelVolume;
use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ServiceTransformer extends AbstractTransformer
{
    public function transformModel(Model $service)
    {
        $output = [
            'name'		=> $service->name,
            'service_id' => $service->service_id_number,
            'description' => $service->description,
            'service_type' => [
                'id' => $service->serviceType->id,
                'name' => $service->serviceType->name
            ],
            'responsibility_area' => [
                'id' => $service->responsibilityArea->id,
                'name' => $service->responsibilityArea->name
            ],
            'department' => [
                'id' => $service->department->id,
                'name' => $service->department->name
            ],
            'program' => [
                'id' => $service->program->id,
                'name' => $service->program->name
            ],
            'authority' => $service->authority,
            'service_agreements' => $service->service_agreements,
            'service_orientation' => $service->orientation,
            'user_fee' => $service->user_fee,
            'service_standards' => $service->service_standards,
            'performance_targets' => $service->performance_targets
        ];

        if ($this->isRelationshipLoaded($service, 'specialDesignations')) {
            $output['special_designations'] = SpecialDesignationTransformer::transform($service->specialDesignations);
        }

        if ($this->isRelationshipLoaded($service, 'eservices')) {
            $output['e_services'] = EServiceTransformer::transform($service->eservices);
        }

        if ($this->isRelationshipLoaded($service, 'channelVolumes')) {
            $total_applications = $service->channelVolumes->pluck('applications')->sum();
            $total_outputs = $service->channelVolumes->pluck('outputs')->sum();
            $percent_complete = round($total_outputs / $total_applications * 100);

            $output['channel_volumes'] = [
                'total_applications' => $total_applications,
                'total_outputs' => $total_outputs,
                'percent_complete' => $percent_complete,
                'channels' => ChannelVolumeTransformer::transform($service->channelVolumes)
            ];
        }

        return $output;
    }
}