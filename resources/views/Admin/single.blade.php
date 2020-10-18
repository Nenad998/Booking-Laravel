@extends('layouts.admin')
@section('content')

    <img class="img_admin" src="/images/{{$house->image}}">
    <div class="contact_main">
        <div class="contact_section">
            <p class="single_house_admin"><strong>{{$house->description}}</strong></p>
            <p class="single_house_admin">Naziv kuce je: <b>{{$house->name}}</b></p>
            <p class="single_house_admin">Vlasnik kuce je: <b>{{$house->owner->name}}</b></p>
            <p class="single_house_admin">Adresa: <b>{{$house->address}}</b></p>

        </div>
    </div>



    <div class="add-house"><a class="add" href="/add_room/{{$house->id}}">DODAJ SOBU</a></div>
    @foreach($rooms as $room)
        <div class="mainGroup">

            <div class="name">

                <div><a class="name_admin" href="{{route('admin.single_room', $room->id)}}">{{$room->name}}</a> </div>


            </div>


            <div class="edit">
                <div><a class="edit_admin" href="{{route('admin.edit_room', $room->id)}}">edit</a></div>
            </div>

            <div class="delete">
                <div><a class="delete_admin" href="{{route('admin.delete_room',$room->id)}}">delete</a></div>
            </div>

        </div>


        <p class="desc">{{$room->description}}</p>

    @endforeach




@endsection
