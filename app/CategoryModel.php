<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostsModel;


class CategoryModel extends Model
{
    protected $table = "categories";

    public function post(){
        return $this->hasOne('PostsModel');
    }
}
