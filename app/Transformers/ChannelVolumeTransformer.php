<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ChannelVolumeTransformer extends AbstractTransformer
{
    public function transformModel(Model $item)
    {
        $percent_complete = 0;

        if ($item->applications) {
            $percent_complete = round($item->outputs / $item->applications * 100);
        }

        $output = [
            'name' => $item->channel->name,
            'applications' => is_null($item->applications) ? 'n/a' : $item->applications,
            'outputs' => is_null($item->outputs) ? 'n/a' : $item->outputs,
            'percent_complete' => $percent_complete
        ];

        return $output;
    }
}