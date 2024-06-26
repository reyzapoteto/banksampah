<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;



class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kategori_barang',
        'deskripsi_barang',
        'harga_barang',
        'stock_barang',
        'gambar_barang',
      ];

      public $timestamps = false;
}
