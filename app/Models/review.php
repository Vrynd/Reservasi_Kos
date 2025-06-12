<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['detail_kos_id', 'name', 'review'];

    public function detailKos()
    {
        return $this->belongsTo(DetailKos::class, 'detail_kos_id');
    }
}
