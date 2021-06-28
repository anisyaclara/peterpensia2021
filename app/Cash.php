<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cash';
    protected $fillable = [
        'cash_type','date','reference','account_name','name','description','total','posting',
    ];
}
