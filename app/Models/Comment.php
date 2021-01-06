<?php

namespace App\Models;

use App\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable =  ['user_id','article_id','body'];

    public function article() {
        return $this -> belongsTo(Article::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }
}
