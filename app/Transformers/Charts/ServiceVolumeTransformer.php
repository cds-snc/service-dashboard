<?php namespace App\Transformers\Charts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ServiceVolumeTransformer
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

        $output = [
            'name' => $department->name
        ];

        $department->channelVolumes->groupBy('channel.name')->each(function ($item, $key) use (&$output) {
            $value = $item->pluck('outputs')->sum();
            $name = snake_case($key);
            $output[$name] = $value;
        });

        return $output;
    }
}