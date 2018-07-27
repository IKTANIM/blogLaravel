<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    Public $primaryKey= 'email';
    // public $incrementing=false; //if you want your primary key to not increment automatically then you have to write this line//mine works withput this line
    

}
