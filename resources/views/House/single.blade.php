@extends('layouts.lay')
@section('content')


    <img class="img_admin" src="/images/{{$house->image}}">
     <div class="contact_main">
    <div class="contact_section">
        <p class="house_single_parag"><strong>{{$house->description}}</strong></p>
        <p class="house_single_parag">Vlasnik kuce je: <b>{{$house->owner->name}}</b></p>

    </div>
     </div>



    <div class="main">

        @foreach($rooms as $room)
        
          @php
            $images=json_decode($room->image);
          @endphp

            <div class="houses">
                <hr>
                <img id="house_img" src="/images/{{$images[0]}}">


                <h3><a class="name_house" href="{{route('room.single', $room->id)}}">{{$room->name}}</a></h3>


                <p class="desc">{{$room->description}}</p>

               <div class="btn-holder">   <a href="{{route('room.single', $room->id)}}">pogledaj jos...</a>  </div>


            </div>

        @endforeach


        @if(count($rooms) > 0)
        {{$rooms->links()}}
            @endif
    </div>



@endsection
