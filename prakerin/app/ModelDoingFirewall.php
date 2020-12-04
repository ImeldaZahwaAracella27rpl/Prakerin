<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDoingFirewall extends Model
{
    protected $primaryKey = 'id_doing';
    protected $table="doing_firewall";
}
