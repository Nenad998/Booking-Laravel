@extends('layouts.lay')
@section('content')

<style>



</style>




<table class="user_table">
    <tr class="user_tr">
        <th class="user_th">Naziv sobe</th>
        <th class="user_th">Naziv kuce</th>
        <th class="user_th">Period</th>
        <th class="user_th">Cena sobe</th>
        <th class="user_th">Ukupna cena</th>
    </tr>

    @foreach(auth()->user()->reservation_model as $reservation)


    <tr>
        <td class="user_td">{{$reservation->room->name}}</td>
         <td class="user_td">{{$reservation->room->house_owner_room->name}}</td>
        <td class="user_td"><span class="span_td">OD: </span> {{$reservation->start_time}} <span class="span_td">DO:</span> {{$reservation->end_time}}</td>
        <td class="user_td">{{$reservation->price}}</td>
        <td class="user_td">{{$total= (strtotime($reservation->end_time) - strtotime($reservation->start_time)) / (60 * 60 * 24) * $reservation->price}}</td>
    </tr>

    @endforeach

</table>



@endsection
