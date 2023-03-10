<?php

namespace App\Models;

use App\Models\pertanyaan;
use App\Models\likecomment;
use App\Models\dislikecomment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comment extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function likecomments()
    {
        return $this->hasMany(likecomment::class);
    }

    public function dislikecomments()
    {
        return $this->hasMany(dislikecomment::class);
    }

    
}
