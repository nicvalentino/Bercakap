<?php

namespace App\Models;

use App\Models\likepost;
use App\Models\dislikepost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function incrementViews()
    {
        $this->views += 1;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(user::class);
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
