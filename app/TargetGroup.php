<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetGroup extends Model
{
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
