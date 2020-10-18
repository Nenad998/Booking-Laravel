<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
protected $guarded=[];

    public function owner()  //relations for owner house
    {
        return $this->belongsTo(User::class,'user_id');
    }




}
