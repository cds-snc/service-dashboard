<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ChannelVolumeTransformer extends AbstractTransformer
{
    public function transformModel(Model $item)
    {
        $output = [
            'id' => $item->channel->id,
            'channel' => $item->channel->name,
            'applications' => $item->applications,
            'outputs' => $item->outputs
        ];

        if ($this->isRelationshipLoaded($item, 'channel')) {
            $output['channel'] = $item->channel->name;
        }

        return $output;
    }
}