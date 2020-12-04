<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelApprovalFirewall extends Model
{
    protected $primaryKey = 'id_approval';
    protected $table="approval_firewall";
}
