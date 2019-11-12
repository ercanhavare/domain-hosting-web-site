<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebHosting
 * @package App
 * @property int id
 * @property mixed host_os
 * @property mixed title
 * @property mixed web_space
 * @property mixed web_permission
 * @property mixed traffic
 * @property mixed e_mail
 * @property mixed sub_domain
 * @property mixed domain_redirect
 * @property mixed database
 * @property mixed panel
 * @property mixed support
 * @property mixed ftp
 * @property mixed reseller
 */

class WebHosting extends Model
{
    protected $guarded = [];
}
