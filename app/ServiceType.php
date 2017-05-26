<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
