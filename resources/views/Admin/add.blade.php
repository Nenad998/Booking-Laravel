@extends('layouts.admin')
@section('title') <title>Admin | dodaj kucu</title>@stop

@section('content')


    <div class="contact_main_add">
        <div class="contact_section_add">
            @error('name')<div class="add_house_name"> {{$message}} </div>  @enderror

            @error('address')<div class="add_house_address"> {{$message}} </div>  @enderror

            <div class="wrapper_add">
                <div class="title_add">
                    <h1>Dodaj kucu</h1>
                </div>
                <div class="contact-form_add">


                    <form action="/house/store" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-fields_add">

                            <input type="text" class="input" placeholder="Unesi naziv" name="name">

                            <textarea class="input" placeholder="Unesi opis" name="description" rows="5" cols="50"></textarea>

                            <input type="text" class="input" placeholder="Unesi adresu" name="address">


                            <h5 class="text-add">Ubaci sliku</h5>

                            <img id="img" src="#" alt="" />

                            <input type="file" class="input" onchange="readURL(this);" name="image">

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
