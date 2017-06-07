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

        $total_applications = $department->volumes->pluck('applications')->sum();
        $total_outputs = $department->volumes->pluck('outputs')->sum();

        $percent_complete = 0;

        if ($total_applications) {
            $percent_complete = round($total_outputs / $total_applications * 100);
        }

        $output['channel_volumes'] = [
            'total_applications' => $total_applications,
            'total_outputs' => $total_outputs,
            'percent_complete' => $percent_complete,
            'channels' => $department->volumes
        ];

        return $output;
    }
}