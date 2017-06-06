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

    public function getVolumesAttribute()
    {
        $channels = collect();
        $volumes = collect();

        foreach ($this->programs as $program) {
            foreach($program->volumes as $channel) {
                $volumes->push($channel);
            }
        }

        $grouped = $volumes->groupBy('channel');

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
