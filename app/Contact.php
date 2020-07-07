<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
