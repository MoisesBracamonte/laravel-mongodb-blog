<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class Post extends Eloquent
{
    use HybridRelations;
    protected $connection = 'mongodb';
    protected $collection = 'post_collection';
    protected $fillabel = ['user_id','category_id','name','slug','excerpt','body','status','file'];
    protected $guarded = [];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
