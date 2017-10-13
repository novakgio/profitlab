<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function getCategory(){
    	 return $this->hasMany('App\BlogCategory','id','blog_category_id');
    }

    public function getTags(){
    	return $this->belongsToMany('App\Tag');
    }
}
