<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['id_pelanggan','email_pelanggan','password_pelanggan','nama_pelanggan','alamat_pelanggan','telepon_pelanggan']; // Kolom tabel
}