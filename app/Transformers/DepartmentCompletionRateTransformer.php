<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DepartmentCompletionRateTransformer
{
    /*
     * NOTE: unlike other transformers in this folder, we are not extending the themsaid/transformers
     * abstract class, because we needed to implement our own transform method here.
     */
    static function transform($modelOrCollection, $options = [])
    {
        $static = new static();

        if ($modelOrCollection instanceof Collection) {
            return $modelOrCollection->map([$static, 'transformModel'])->toArray();
        }

        return [$static->transformModel($modelOrCollection)];
    }

    public function transformModel(Model $department) {
        $total_applications = $department->channelVolumes->pluck('applications')->sum();
        $total_outputs = $department->channelVolumes->pluck('outputs')->sum();

        $percent_complete = 0;

        if ($total_applications) {
            $percent_complete = round($total_outputs / $total_applications * 100);
        }

        $output = [
            'name' => $department->name,
            'completion' => $percent_complete
        ];

        return $output;
    }
}