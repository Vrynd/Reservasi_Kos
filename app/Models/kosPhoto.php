<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kosPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['detail_kos_id', 'photo_path'];

    public function detailKos()
    {
        return $this->belongsTo(DetailKos::class);
    }
}
