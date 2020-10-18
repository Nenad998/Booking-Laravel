<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded=[];
/*
    public function houseReservation()
    {
        return $this->belongsTo(House::class,'house_id');
    }*/

    public function room() //relation for belongs to room model
    {
        return $this->belongsTo(Room::class);
    }

    public function user() //relation for belongs to user model
    {
        return $this->belongsTo(User::class);
    }
}
