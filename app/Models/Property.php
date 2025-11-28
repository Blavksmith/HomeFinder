<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'photo',
        'title',
        'summary',
        'price',
        'city',
        'state',
        'country',
        'bed_room',
        'bath_room',
        'area_l',
        'area_w',
        'area_total',
    ];
    
    // 1 property belongs to 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 property punya banyak user
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
