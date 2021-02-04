<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = "tags";

    public function post(){
        return $this->belongsToMany('PostsModel', "tags_posts", 'post_id', 'tag_id');
    }
}
