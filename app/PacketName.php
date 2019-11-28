<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketName extends Model
{
    protected $guarded = [];


    public function webPacket()
    {
        return $this->hasMany(WebPacket::class);
    }
}
