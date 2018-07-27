<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    Public $primaryKey= 'email';
    // public $incrementing=false; //if you want your primary key to not increment automatically then you have to write this line//mine works withput this line
    public function posts()
    {
        return $this->hasMany('App\Post','emailPost','email');//One user have many post
        //emailPost is the foreign key in the posts table and email primary key in the user table
        ////writing format
        // return $this->hasMany('App\Comment', 'foreign_key');
        // return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }

}
