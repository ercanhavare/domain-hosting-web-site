<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DomainName
 * @package App
 * @property int id
 * @property mixed extension
 * @property mixed registration_fee
 * @property mixed renewal_fee
 */
class DomainName extends Model
{
    protected $guarded = [];
}
