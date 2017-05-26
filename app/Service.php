<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function responsibilityArea()
    {
        return $this->belongsTo(ResponsibilityArea::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function eservices()
    {
        return $this->hasMany(EService::class);
    }

    public function specialDesignations()
    {
        return $this->belongsToMany(SpecialDesignation::class);
    }

    public function targetGroups()
    {
        return $this->belongsToMany(TargetGroup::class);
    }

    public function channelVolumes()
    {
        return $this->hasMany(ChannelVolume::class);
    }
}
