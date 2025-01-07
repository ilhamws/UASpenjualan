<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['id_produk','id_kategori','nama_produk','harga_produk','alamat_pelanggan','telepon_pelanggan']; // Kolom tabel
}