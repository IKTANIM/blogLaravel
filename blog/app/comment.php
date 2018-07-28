<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');//This comment belongs to post 
        //return $this->belongsTo('App\Post', 'foreign_key');
        // return $this->belongsTo('App\Post', 'foreign_key', 'other_key');
    }
}
