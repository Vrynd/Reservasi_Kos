<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kos extends Model
{
    protected $table = 'kos';
    protected $fillable = ['foto', 'nama', 'lokasi', 'harga'];
}
