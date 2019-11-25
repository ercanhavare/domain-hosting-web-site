<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebPacket
 * @package App
 * @property int id
 * @property mixed name
 * @property mixed price
 * @property mixed desc
 * @property mixed file_image
 */
class WebPacket extends Model
{
    protected $guarded = [];
}
