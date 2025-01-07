<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['id_admin','username','password','nama_lengkap']; // Kolom tabel
}