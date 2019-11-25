<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebHosting
 * @package App
 * @property int id
 * @property mixed title
 * @property mixed price
 * @property mixed host
 * @property mixed email
 * @property mixed web_space
 * @property mixed support
 * @property mixed database
 * @property mixed reseller
 */

class WebHosting extends Model
{
    protected $guarded = [];
}
