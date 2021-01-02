<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//

    protected $fillable =  ['user_id','tag_id','title','url','tag'];

    // articleテーブルとは多対1の関係であることを定義している
    // belongsTo 多対1 だよ～
    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function likes() {
        return $this->hasMany(Like::class, 'article_id');
    }

}
