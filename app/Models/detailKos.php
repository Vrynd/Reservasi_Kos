<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailKos extends Model
{
    use HasFactory;

    protected $table = 'detail_kos';

    protected $fillable = [
        'name',
        'facilities',
        'price',
        'status',
    ];

    public function photos()
    {
        return $this->hasMany(KosPhoto::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'detail_kos_id');
    }
}
