<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function like($user = null) {
        $user = $user ?: Auth::user();
        return $this->likes()->attach(Auth::user());
    }

    public function likes(){
        return $this->belongsToMany(User::class);
    }
}
