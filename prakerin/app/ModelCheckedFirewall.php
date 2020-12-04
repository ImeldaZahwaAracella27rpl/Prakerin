<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCheckedFirewall extends Model
{
    protected $primaryKey = 'id_checked';
    protected $table="checked_firewall";
}
