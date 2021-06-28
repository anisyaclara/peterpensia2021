<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'account_master';
    protected $fillable = ['account_code','account_name'];
}
