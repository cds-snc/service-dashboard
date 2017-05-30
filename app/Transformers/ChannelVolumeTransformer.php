<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ChannelVolumeTransformer extends AbstractTransformer
{
    public function transformModel(Model $item)
    {
        $percent_complete = 0;

        if ($item->outputs) {
            $percent_complete = round($item->outputs / $item->applications * 100);
        }

        $output = [
            'id' => $item->channel->id,
            'name' => $item->channel->name,
            'applications' => is_null($item->applications) ? 'N/A' : $item->applications,
            'outputs' => is_null($item->outputs) ? 'N/A' : $item->outputs,
            'percent_complete' => $percent_complete
        ];

        return $output;
    }
}