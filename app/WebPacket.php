<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebPacket
 * @package App
 * @property int id
 * @property mixed packet_name_id
 * @property mixed price
 * @property mixed desc
 * @property mixed file_image
 */
class WebPacket extends Model
{
    protected $guarded = [];

    public function packetNames()
    {
        return $this->belongsTo(PacketName::class,'packet_name_id');
    }
}
