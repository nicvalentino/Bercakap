<?php

namespace App\Models;

use App\Models\post;
use App\Models\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class likepost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function isLiked($data){
        $found = likepost::all()->where('user_id' , $data['user_id'])->where('post_id' , $data['post_id']);
        if(count($found) == 0){
            return false;
        } else {
            return true;
        }
    }

    public static function remove($data){
        likepost::where('user_id' , $data['user_id'])->where('post_id' , $data['post_id'])->delete();
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function post()
    {
        return $this->belongsTo(post::class);
    }
}
