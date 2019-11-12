<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package App
 * @property int id
 * @property mixed address
 * @property mixed telephone
 * @property mixed email
 */

class Contact extends Model
{
    protected $guarded = [];
}
