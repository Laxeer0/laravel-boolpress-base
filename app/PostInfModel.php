<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostsModel;

class PostInfModel extends Model
{
    protected $table = "posts_information";

    protected $fillable = [
        'post_id','description','slug','id'
    ];

    public function post(){
        return $this->belongsTo('PostsModel', 'post_id', 'id');
    }
}
