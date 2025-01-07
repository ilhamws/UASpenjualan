<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategorii extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['id_kategori','nama_kategori']; // Kolom tabel
}