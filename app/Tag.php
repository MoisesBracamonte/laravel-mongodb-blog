<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class Tag extends Eloquent
{
	use HybridRelations;
    protected $connection = 'mongodb';
    protected $collection = 'tag_collection';
    protected $fillabel = ['name','slug'];
    protected $guarded = array();
    #relaciones
    public function posts(){
        return $this->belongsToMay('App\Tag');
    }
}
