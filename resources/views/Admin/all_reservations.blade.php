@extends('layouts.admin')
@section('title') <title>Admin | sve rezervacije</title>@stop
@section('content')




    <table class="all_table">
        <tr class="all_tr">
            <th class="all_th">Korisnici</th>
            <th class="all_th">Ime kuce</th>
            <th class="all_th">Ime sobe</th>
            <th class="all_th">Period</th>
            <th class="all_th">Cena sobe</th>
        </tr>

        @foreach($reservations as $reservation)
        @if(is_object($reservation->room))

            <tr class="all_tr">
                <td class="all_td">{{$reservation->user->name}}</td>
                <td class="all_td">{{$reservation->room->house_owner_room->name}}</td>
                <td class="all_td">{{$reservation->room->name}}</td>
                <td class="all_td"><span class="span_td">OD:</span> {{$reservation->start_time}} <span class="span_td">DO:</span> {{$reservation->end_time}}</td>
                <td class="all_td">{{$reservation->price}}</td>

            </tr>
           @endif
        @endforeach

    </table>

@endsection
