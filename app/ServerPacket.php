<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServerPacket
 * @package App
 * @property int id
 * @property mixed name
 * @property mixed price
 * @property mixed cpu
 * @property mixed ram
 * @property mixed hdd
 * @property mixed internet
 * @property mixed traffic
 */

class ServerPacket extends Model
{
    protected $guarded = [];
}
