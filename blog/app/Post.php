<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $primaryKey='Post_id';
    public function user()
    {
        return $this->belongsTo('App\User','emailPost','email');//This post belongs to user 
        //return $this->belongsTo('App\Post', 'foreign_key');
        // return $this->belongsTo('App\Post', 'foreign_key', 'other_key');
    }

}
