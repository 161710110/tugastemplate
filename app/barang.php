<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
     protected $table = 'barang';
    protected $fillable = ['kode_barang','nama_barang','harga'];
}
