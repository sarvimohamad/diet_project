<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Diet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'desc',
        'image'
    ];


    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
