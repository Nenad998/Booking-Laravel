<?php

namespace App\Http\Controllers;


use App\Reservation;
use App\User;


class UserController extends Controller
{

    public function profile(User $user) //method for view user's house
    {
        return view('auth.profile',compact('user'));
    }

    public function users_reservations( Reservation $reservations) //method for user's reservations
    {

        return view('auth.reservations', compact('reservations'));
    }
}
