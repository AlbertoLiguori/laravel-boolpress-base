<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    // MANY TO MANY (belongsToMany)
    public function posts(){
      return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }
}
