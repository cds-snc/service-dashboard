<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class DepartmentTransformer extends AbstractTransformer
{
    public function transformModel(Model $department)
    {
        $output = [
            'id' => $department->id,
            'name' => $department->name
        ];

        if (in_array('services', $this->options)) {
            $output['services'] = ServiceTransformer::transform($department->services);
        }

        if (in_array('programs', $this->options)) {
            $output['programs'] = ProgramTransformer::transform($department->programs);
        }

        $total_applications = $department->channelVolumes->pluck('applications')->sum();
        $total_outputs = $department->channelVolumes->pluck('outputs')->sum();

        $percent_complete = 0;

        if ($total_applications) {
            $percent_complete = round($total_outputs / $total_applications * 100);
        }

        $output['channel_volumes'] = [
            'total_applications' => $total_applications,
            'total_outputs' => $total_outputs,
            'percent_complete' => $percent_complete,
            'channels' => $this->getChannels($department->channelVolumes)
        ];

        return $output;
    }

    protected function getChannels($data)
    {
        $result = $data->groupBy('channel.name')->map(function ($item) {
            $applications = $item->pluck('applications')->sum();
            $outputs = $item->pluck('outputs')->sum();

            $percent_complete = 0;

            if ($applications) {
                $percent_complete = round($outputs / $applications * 100);
            }

            return [
                'name' => $item->first()->channel->name,
                'applications' => $applications,
                'outputs' => $outputs,
                'percent_complete' => $percent_complete
            ];
        });

        return array_values($result->toArray());
    }
}