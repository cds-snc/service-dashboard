<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
    protected $appends = ['department'];
    protected $with = ['serviceType', 'responsibilityArea', 'program', 'eservices', 'specialDesignations', 'channelVolumes'];

    protected $casts = [
        'service_agreements' => 'boolean',
        'user_fee' => 'boolean',
        'service_standards' => 'boolean',
        'performance_targets' => 'boolean'
    ];

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

    public function getDepartmentAttribute()
    {
        return $this->program->department;
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

    public function getOrientationAttribute($value)
    {
        if ($value == 1) {
            return 'External';
        }
        if ($value == 2) {
            return 'Internal';
        }
        if ($value == 3) {
            return 'Internal/External';
        }
        return 'N/A';
    }
}
