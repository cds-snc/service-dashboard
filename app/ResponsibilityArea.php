<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsibilityArea extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
