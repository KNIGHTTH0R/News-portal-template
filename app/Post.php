<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [''];

    public function comments(){

        return $this->hasMany(Comments::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }


}
