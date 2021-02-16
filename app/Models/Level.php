<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Level extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
