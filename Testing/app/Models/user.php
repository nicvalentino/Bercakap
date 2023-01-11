<?php

namespace App\Models;

use App\Models\likepost;
use App\Models\dislikepost;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    public function pertanyaans()
    {
        return $this->hasMany(pertanyaan::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function likeposts()
    {
        return $this->hasMany(likepost::class);
    }

    public function dislikeposts()
    {
        return $this->hasMany(dislikepost::class);
    }
    
}