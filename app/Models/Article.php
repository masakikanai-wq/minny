<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//

    protected $fillable =  ['user_id','tag_id','title','url'];

    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'App\Models\ArticleTag')->withTimestamps();;
    }

}
