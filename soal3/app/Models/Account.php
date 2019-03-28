<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $fillable = ['user_id', 'bank', 'account_number', 'owner'];
}
