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
}
