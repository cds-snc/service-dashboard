<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $guarded = [];

    public function volumes()
    {
        return $this->hasMany(ChannelVolume::class);
    }
}
