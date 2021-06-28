<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    // use Sortable;
    protected $fillable = ['id', 'nama_product', 'harga', 'created_at', 'update_at'];

    public function buys()
    {
        return $this->hasOne('App\Buy');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
