<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EService extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
