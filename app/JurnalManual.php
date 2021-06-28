<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalManual extends Model
{
  protected $table = 'jurnal_manuals';
  protected $fillable = ['no_trans','akun_debit','akun_kredit','deskripsi','jumlah'];
  public function akun()
  {
      return $this->belongsTo('App\Akun');
  }
   
}
