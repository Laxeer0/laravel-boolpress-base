<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryModel;
use App\PostInfModel;
use App\TagModel;

class PostsModel extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'id','category_id','title','author'
    ];

    public function postInf(){
        return $this->hasOne('App\PostInfModel', 'post_id', 'id');
    }
    public function postCat(){
        return $this->hasOne('App\CategoryModel', 'id','category_id');
    }
    public function postTag(){
        return $this->belongsToMany('App\TagModel',"tags_posts", 'post_id', 'tag_id');
    }

}
