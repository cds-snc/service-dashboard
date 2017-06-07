<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ProgramTransformer extends AbstractTransformer
{
    public function transformModel(Model $program)
    {
        $output = [
            'id' => $program->id,
            'name' => $program->name,
            'department' => $program->department,
            'services' => ServiceTransformer::transform($program->services)
        ];

        $total_applications = $program->volumes->pluck('applications')->sum();
        $total_outputs = $program->volumes->pluck('outputs')->sum();

        $percent_complete = 0;

        if ($total_applications) {
            $percent_complete = round($total_outputs / $total_applications * 100);
        }

        $output['channel_volumes'] = [
            'total_applications' => $total_applications,
            'total_outputs' => $total_outputs,
            'percent_complete' => $percent_complete,
            'channels' => $program->volumes
        ];

        return $output;
    }
}