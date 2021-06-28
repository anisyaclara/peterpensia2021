<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journals extends Model
{
    protected $table = 'journal';
    protected $fillable = [
        'trans_date','reference','description','debit_account','kredit_account','debit','kredit','posting',
    ];
}
