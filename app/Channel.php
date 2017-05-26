<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function volumes()
    {
        return $this->hasMany(ChannelVolume::class);
    }
}
