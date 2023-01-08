<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pertanyaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query -> where('body', 'like', '%' . request('search') . '%');
        });
    }
        
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function jawaban_psikiaters()
    {
        return $this->hasMany(jawaban_psikiater::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

}
