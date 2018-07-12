<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class Category extends Eloquent
{
	use HybridRelations;
	    protected $connection = 'mongodb';
    protected $collection = 'category_collection';
    protected $fillabel = ['name','slug','body'];
    protected $guarded = array();
    # Relaciones 
    public function posts(){
    	return $this->hasMany('App\Post');
    }
}
