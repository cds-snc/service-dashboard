<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChannelVolume extends Model
{
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
