<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded=[];


    public function house_owner_room() //relation for belongs to house model
    {
        return $this->belongsTo(House::class,'house_id', 'id');
    }
}
