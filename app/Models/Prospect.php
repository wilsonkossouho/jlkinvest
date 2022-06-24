<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Prospect extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->role_id != 1 && Auth::user()->role_id != 3 ){
            return $query->where('user_id', Auth::user()->id);
        }
    }
}
