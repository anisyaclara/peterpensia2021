<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = 'suppliers';
    protected $fillable =['id','nama','jenis_kelamin','no_hp','alamat','created_at','update_at'];
    
    public function buys()
    {
        return $this->hasMany('App\Buy');
    }
}
