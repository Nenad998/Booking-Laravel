@extends('layouts.admin')
@section('title') <title>Admin | pocetna</title>@stop

@section('content')

<div class="add-house"><a class="add" href="/house/add">DODAJ KUCU</a></div>
    @foreach($houses as $house)
    <div class="mainGroup">

        <div class="name">

            <div><a class="name_admin" href="{{route('admin.single_house',$house->id)}}">{{$house->name}}</a> </div>


        </div>


        <div class="edit">
            <div><a class="edit_admin" href="{{route('admin.edit_house',$house->id)}}">edit</a></div>
        </div>

        <div class="delete">
            <div><a class="delete_admin" href="{{route('admin.delete_house',$house->id)}}">delete</a></div>
        </div>

    </div>

    <p><b>Vlasnik kuce je:</b> <a class="owner_house_name" href="/profile/{{$house->owner->id}}"><b>{{$house->owner->name}}</b></a></p>

    <p class="desc">{{$house->description}}</p>

    @endforeach

<div class="links-admin-parent">
  <div class="links-admin">  {{$houses->links()}}


  </div>
</div>
@endsection
