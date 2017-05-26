<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EService extends Model
{
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
