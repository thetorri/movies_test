<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'movie_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
