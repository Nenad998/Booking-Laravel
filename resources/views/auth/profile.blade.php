@extends('layouts.admin')
@section('title') <title>Admin | vlasnik kuce</title>@stop
@section('content')



    <table class="profile_table">

        <tr class="profile_tr">

            <th class="profile_th">Naziv kuce</th>
            <th class="profile_th">Adresa</th>

        </tr>
        @foreach($user->houses as $house)

            <tr class="profile_tr">
                <td class="profile_td">{{$house->name}}</td>
                <td class="profile_td">{{$house->address}}</td>
            </tr>

        @endforeach

    </table>


@endsection
