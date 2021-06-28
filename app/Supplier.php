<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'no_hp', 'alamat', 'created_at', 'upadate_at'];

    public function buys()
    {
        return $this->hasMany('App\Buys');
    }
}
