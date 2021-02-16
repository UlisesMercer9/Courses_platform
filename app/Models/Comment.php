<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable(){
        return $this->morphTo();
    }

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion uno a muchos polimorfica

    public function comments(){
        return $this->morphToMany('App\Models\Comment','commentable');
    }

    public function reactions(){
        return $this->morphToMany('App\Models\Reaction','reactionable');
    }
}
