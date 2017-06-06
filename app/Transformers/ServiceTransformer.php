<?php namespace App\Transformers;

use App\ChannelVolume;
use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ServiceTransformer extends AbstractTransformer
{
    public function transformModel(Model $service)
    {
        $output = [
            'id' => $service->id,
            'name'		=> $service->name,
            'service_id' => $service->service_id_number,
            'description' => $service->description,
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
            'service_agreements' => $service->service_agreements ? 'Yes' : 'No',
            'service_orientation' => $service->orientation,
            'user_fee' => $service->user_fee ? 'Yes' : 'No',
            'service_standards' => $service->service_standards ? 'Yes' : 'No',
            'performance_targets' => $service->performance_targets ? 'Yes' : 'No'
        ];

        if ($this->isRelationshipLoaded($service, 'serviceType')) {
            if ($service->serviceType) {
                $output['service_type'] = [
                    'id' => $service->serviceType->id,
                    'name' => $service->serviceType->name
                ];
            }
        }

        if ($this->isRelationshipLoaded($service, 'specialDesignations')) {
            if ($service->specialDesignations->count()) {
                $output['special_designations'] = SpecialDesignationTransformer::transform($service->specialDesignations);
            }
        }

        if ($this->isRelationshipLoaded($service, 'eservices')) {
            $output['e_services'] = EServiceTransformer::transform($service->eservices->first());
        }

        if ($this->isRelationshipLoaded($service, 'channelVolumes')) {
            $total_applications = $service->channelVolumes->pluck('applications')->sum();
            $total_outputs = $service->channelVolumes->pluck('outputs')->sum();

            $percent_complete = 0;

            if ($total_applications) {
                $percent_complete = round($total_outputs / $total_applications * 100);
            }

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