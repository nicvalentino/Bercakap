<?php

namespace App\Models;

use App\Models\user;
use App\Models\comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class likecomment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function isLiked($data){
        $found = likecomment::all()->where('user_id' , $data['user_id'])->where('comment_id' , $data['comment_id']);
        if(count($found) == 0){
            return false;
        } else {
            return true;
        }
    }

    public static function remove($data){
        likecomment::where('user_id' , $data['user_id'])->where('comment_id' , $data['comment_id'])->delete();
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function comment()
    {
        return $this->belongsTo(comment::class);
    }
}
