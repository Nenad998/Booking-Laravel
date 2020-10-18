@extends('layouts.lay')
@section('content')
<img class="home_img" src="/images/logo.png">


<div class="main">

    @foreach($houses as $house)


        <div class="houses">
            <hr>
            <img id="house_img" src="/images/{{$house->image}}">

        <h3><a class="name_house" href="{{route('house.single', $house->id)}}">{{$house->name}}</a></h3>


        <p class="desc"> {{ \Illuminate\Support\Str::limit($house->description, 310, $end='...') }} </p>

            <div class="btn-holder">   <a href="{{route('house.single', $house->id)}}">pogledaj jos...</a>  </div>


        </div>

    @endforeach


        {{$houses->links()}}
</div>


    @endsection
