<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table = 'buys';
    protected $fillable = ['id', 'product_id', 'supplier_id', 'harga_product','total', 'total_harga', 'created_at', 'update_at'];
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }

    public function transaction_get()
    {
        return $this->belongsTo('App\Transaction');
    }
}
