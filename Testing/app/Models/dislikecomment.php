<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dislikecomment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function isLiked($data){
        $found = dislikecomment::all()->where('user_id' , $data['user_id'])->where('comment_id' , $data['comment_id']);
        if(count($found) == 0){
            return false;
        } else {
            return true;
        }
    }

    public static function remove($data){
        dislikecomment::where('user_id' , $data['user_id'])->where('comment_id' , $data['comment_id'])->delete();
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
