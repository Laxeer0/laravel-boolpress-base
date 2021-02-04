<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryModel;
use App\PostInfModel;

class PostsModel extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'id','category_id','title','author'
    ];

    public function postInf(){
        return $this->hasOne('App\PostInfModel', 'post_id', 'id');
    }
    public function category(){
        return $this->hasOne('App\PostsModel', 'category_id', 'id');
    }

}
