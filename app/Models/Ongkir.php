<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    protected $table = 'ongkir';
    protected $fillable = ['id_kategori','nama_kategori']; // Kolom tabel
}