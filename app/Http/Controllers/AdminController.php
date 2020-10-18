<?php

namespace App\Http\Controllers;

use App\House;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Image;
class AdminController extends Controller
{
    public function index() //home admin page
    {
        if(isset(request()->search)){
            $houses=House::where('name','like','%'.\request()->search.'%')->paginate(5);
        }else {
            $houses = House::paginate(5);
        }
        return view('Admin.index',compact('houses'));
    }

    public function add() //method for view adding house
    {
        return view('Admin.add');
    }

    public function store(Request $request) //method for adding house with validation
    {
        $this->validate($request,[
            'name'=>'required|min:5',
            'address'=>'max:30|min:5|required'
        ]);
        $data=request()->only(['name','image','description','address']);      
        if(isset($request['image'])){
            if($request->hasFile('image')){
                $file=$request->file('image');
                $img=Image::make($file);
                $path=public_path('images');
                $img_name=time().'_'.$file->getClientOriginalName();
                $img->save($path.'/'.$img_name);
            }
        }
        $data['image']=$img_name;
        unset($data['_token']);
        $data['user_id']=auth()->user()->id;
        House::create($data);
        return redirect('admin')->with('success', 'uspesno dodavanje kuce');

    }

    public function single($id)  //method for view single house and their rooms
    {
        $house=House::find($id);
        $rooms= Room::where('house_id', $house->id)->get();
        return view('Admin.single',compact('house', 'rooms'));

    }

    public function add_room(House $house) //method for view adding room
    {
        return view('Room.add',compact('house'));
    }

    public function store_room(Request $request, $house_id) //method for adding rooms with validation
    {
        $this->validate($request,[
            'name'=>'required|min:5',
        ]);
        $data=request()->only(['name','image','description','price','equipment','beds','contact']);
        if(isset($request['image'])){
            if($request->hasFile('image')) {
                $files = $request->file('image');
                $images=[];
                foreach ($files as $file) {
                    $img = Image::make($file);
                    $path = public_path('images');
                    $img_name = time() . '_' . $file->getClientOriginalName();
                    $img->save($path . '/' . $img_name);
                    $images[]=$img_name;
                }
            }
        }
        $data['image'] = json_encode($images);
        $data['house_id']=$house_id;
        Room::create($data);
        return redirect('/single_house/'.$house_id)->with('success', 'uspesno dodavanje sobe');

    }

    public function single_room($id) //method for view single room
    {
        $room= Room::find($id);
        return view('Admin.single_room', compact('room'));
    }

    public function edit_house_view($id) //method for view editing house
    {
        $house=House::find($id);
        return view('Admin.edit_house', compact('house'));
    }

    public function edit_house(Request $request, $id) //method for editing house
    {
        $data=request()->only(['name','image','description','address']);
        if(isset($request['image'])){
            if($request->hasFile('image')){
                $file=$request->file('image');
                $img=Image::make($file);
                $path=public_path('images');
                $img_name=time().'_'.$file->getClientOriginalName();
                $img->save($path.'/'.$img_name);
                $data['image']=$img_name;
            }
        }
        $data['user_id']=auth()->user()->id;
        $house= House::find($id);
        $house->fill($data);
        $house->image=$data['image'];
        $house->save();
        return redirect('admin')->with('success', 'uspesno editovanje kuce');
    }

    public function delete_house($id) //method for delete house
    {
        $house=House::find($id);
        $house= House::where('id', $house->id)->delete();  //radice i bez varijable $house??
        return redirect('admin')->with('success', 'uspesno brisanje kuce');
    }

    public function edit_room_view($id) //method for view editing room
    {
        $room=Room::find($id);
        return view('Admin.edit_room', compact('room'));
    }

    public function edit_room(Request $request, $house_id) //method for editing room
    {
        $data=request()->only(['name','image','description','price','equipment','beds','contact']);
        
        if(isset($request['image'])){
            if($request->hasFile('image')) {
                $files = $request->file('image');
                $images=[];
                foreach ($files as $file) {
                    $img = Image::make($file);
                    $path = public_path('images');
                    $img_name = time() . '_' . $file->getClientOriginalName();
                    $img->save($path . '/' . $img_name);
                    $images[]=$img_name;
                }
            }
        }
        $data['image'] = json_encode($images);
        $data['house_id']=$house_id;
        $room= Room::find($house_id);
        $room->fill($data);
        $room->save();
        return redirect('admin')->with('success', 'uspesno editovanje sobe');
    }

    public function delete_room($id) //method for delete room
    {
        $room=Room::find($id);
        $room= Room::where('id', $room->id)->delete();
        return redirect('admin')->with('success', 'uspesno brisanje sobe');
    }

    public function admin_reservations(Reservation $reservations) //method for view all reservations
    {
        $reservations= Reservation::get();
        return view('Admin.all_reservations', compact('reservations'));
    }
}
