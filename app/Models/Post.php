<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','post_text','user_id','post_image'];
    //public $timestamps = false;

    public function categories(){
        return $this -> belongsToMany('App\Models\category','categories_posts');
    }
}
