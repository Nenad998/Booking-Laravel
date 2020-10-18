@extends('layouts.admin')
@section('content')




    <div class="contact_main_add">
        <div class="contact_section_add">
            @error('name')<div class="add_house_name"> {{$message}} </div>  @enderror
            @error('price')<div class="add_house_name"> {{$message}} </div>  @enderror


            <div class="wrapper_add">
                <div class="title_add">
                    <h1>Dodaj sobu</h1>
                </div>
                <div class="contact-form_add">

                    <form action="/add_room_post/{{$house->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-fields_add">

                            <input type="text" class="input" placeholder="Unesi naziv" name="name">

                            <textarea class="input" placeholder="Unesi opis" name="description" rows="5" cols="50"></textarea>


                            <input type="number" class="input" placeholder="Unesi cenu" name="price">

                            <input type="text" class="input" placeholder="Unesi opremu" name="equipment">

                            <input type="text" class="input" placeholder="Unesi broj kreveta" name="beds">

                            <input type="text" class="input" placeholder="Unesi telefon" name="contact">


                            <h5 class="text-add">Ubaci sliku</h5>
                            <img id="img" src="#" alt="" />

                            <input type="file" multiple class="input" onchange="readURL(this);" name="image[]">



                            <button type="submit" class="btn-add">Dodaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    /* function for display image behide submit button */

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }



</script>

@endsection






