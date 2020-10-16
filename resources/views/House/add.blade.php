@extends('layouts.lay')
@section('content')
    @if($errors->any())
        <ul>@foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

    <form action="/house/store" method="post">
        @csrf
        unesi ime

        <input type="text" name="name"> @error('name') {{$message}} @enderror <br>
        unesi opis
        <input type="text" name="description"> <br>
        unesi adresu
        <input type="text" name="address"><br>
        unesi telefon
        <input type="text" name="phone"><br>
        <input type="submit">
    </form>

// OVO IZBRISI





    @stop






