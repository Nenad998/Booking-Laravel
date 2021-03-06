@extends('layouts.lay')
@section('title') <title>Rezervacija</title>@stop
@section('content')



    <h3 class="reserv_parag">Izabrali ste sobu: <b class="bold">{{$room->name}}</b> u kuci: <b class="bold">{{$room->house_owner_room->name}}</b> </h3>

 <h2 class="reserv_txt">Izaberite period boravka</h2>


    <form action="/reservation_post/{{$room->id}}" method="post">
        @csrf

        <div class="form-group_reservation">
            <label for="example-date-input" class="col-2 col-form-label"><b class="bold">OD:</b></label>
            <div class="from">
                <input autocomplete="off" class="form-control start" id="start" type="text" name="start_time"  value="">
            </div><br><br>

            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label"><b class="bold">DO:</b></label>
                <div class="to">
                    <input autocomplete="off"  class="form-control" id="end" type="text" name="end_time"  value="">
                </div>
            </div><br>

            <input type="hidden" id="price" name="price" value="{{$room->price}}">
            <input type="hidden" name="house_id" value="{{$room->house_id}}">
            <input type="submit" disabled="true"  id="reservat" class="reserv_btn" value="Rezervisi"><br><br>
            <label class="reserv_total_price" for=""><b>Ukupno za naplatu</b></label>
            <input readonly disabled type="text" name="" id="suma">


        </div>
    </form>

<script>

    $(function() {
        $("#start").datepicker(
            {
                dateFormat: "d.m.yy",
                showButtonPanel: true,
                minDate: '0M',
               /* maxDate: '+90D'*/
            }
        );
    });
    $("#start").change(function (){  //diable za drugi input (DO)
        $("#end").datepicker(
            {
                dateFormat: "d.m.yy",
                showButtonPanel: true,
                minDate: $("#start").val(),
                onSelect: function () {
                    myfunc();
                }
            }
        );
        })
;


    // disable za dugme rezervisi

    $('#end').blur(function (){
            $('#reservat').attr('disabled',false);
        $("#reservat").hover(function() {
            $(this).css("background-color","#4d4a4a", "color", "white")
        }).mouseout(function(){
            $(this).css({"background":"darkorange","color":"white", "padding":"9px 7px 9px 7px", "border-radius":"8px", "font-size":"15px"});
        });


    })



    function myfunc(){
        var start= $("#start").datepicker("getDate");
        var end= $("#end").datepicker("getDate");
        var days = (end- start) / (1000 * 60 * 60 * 24);
        var price = $("#price").val()
        var all= days * price;
        $("#suma").val(all);
        $("#suma").css({"font-size": "17px","border": "2px solid black", "font-weight":"bold" });


    }



</script>



@endsection
