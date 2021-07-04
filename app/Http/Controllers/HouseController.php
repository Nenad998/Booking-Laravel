<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\House;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
;

class HouseController extends Controller
{
    public function all() //home user page
    {
        if(isset(request()->search)){
            $houses=House::where('name','like','%'.\request()->search.'%')->paginate(5);
        }else {
            $houses = House::paginate(5);
        }
        return view('House.index',compact('houses'));
   }

    public function single($id) ////method for view single house and their rooms
    {
        $house=House::findOrFail($id);
        $rooms= Room::where('house_id', $house->id)->paginate(2);
        return view('House.single',compact('house', 'rooms'));

   }

    public function single_room($id) //method for view single room
    {
        $room= Room::findOrFail($id);
        return view('Room.index', compact('room'));
   }

    public function about_us() //method for view about us page
    {
        return view('House.about_us');
   }

    public function contact() //method for view contact page
    {
        return view('House.contact');
    }

    public function reservation($id) //method for view reservation form
    {
         $room=Room::findOrFail($id);
         return view('Room.reservation_room', compact('room'));
    }

    public function reservation_post($room_id) //method for reservation room with Carbon package
    {
        $data = request()->all();
        $data['room_id'] = $room_id;
        $data['user_id'] = auth()->user()->id;
        $room = Room::where([['id', $room_id], ['house_id', $data['house_id']]])->first();

        if (!$room) {
            return redirect('/reservation/' . $room_id)->with('warning', 'soba nije validna');
        }

        $start = Carbon::create(request()->start_time);
        $start = $start->toDateTimeString();
        $end = Carbon::create(request()->end_time);
        $end = $end->toDateTimeString();
        $data['start_time'] = $start;
        $data['end_time'] = $end;
        $reservations = Room::whereIn('id', function ($query) use ($start, $end) {
            $query->from('reservations')
                ->select('room_id')
                ->where('start_time', '<=', $end)
                ->where('end_time', '>=', $start);
        })->get();

        foreach ($reservations as $res) {

            if ($res->id == $room_id) {
                return redirect('/reservation/' . $room_id)->with('warning', 'soba je zauzeta');
            }
        }
            Reservation::create($data);
            return redirect('/reservation/' . $room_id)->with('success', 'rezervacija je uspesna');
    }

}
