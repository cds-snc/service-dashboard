<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function channelVolumes()
    {
        return $this->hasManyThrough(ChannelVolume::class, Service::class);
    }

    public function getVolumesAttribute()
    {
        $channels = collect();
        $grouped = $this->channelVolumes->groupBy('channel.name');

        foreach ($grouped as $name => $channel) {
            $channels->push([
                'channel' => $name,
                'applications' => $channel->sum('applications'),
                'outputs' => $channel->sum('outputs')
            ]);
        }

        return $channels;
    }
}
