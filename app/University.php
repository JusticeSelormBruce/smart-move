<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class University extends Model
{
    protected $guarded =[];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->hasOne(Images::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

