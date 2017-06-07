<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function services()
    {
        return $this->hasManyThrough(Service::class, Program::class);
    }

    public function responsibilityAreas()
    {
        return $this->hasMany(ResponsibilityArea::class);
    }

    public function getChannelVolumesAttribute()
    {
        $this->load([
            'programs.channelVolumes'

            => function ($q) use (&$channelVolumes) {
                $channelVolumes = $q->get()
                    ->unique();
            }
        ]);

        return $channelVolumes;
    }
}
