@extends('layouts.lay')
@section('title') <title>Kontakt</title>@stop
@section('content')



<div class="contact_main">
    <div class="contact_section">
        <p class="contact_parag"><strong>Putem ovog formulara možete nas kontaktirati, postaviti pitanje, rezervisati smeštaj ili poslati neki zanimljiv tekst. Ukoliko ste zainteresovani da oglasite Vaše smeštajne kapacitete koji su u programu subvencionisanog smeštaja sa upotrebom vaučera, slobodno nas kontaktirajte, cena oglašavanja je 3.600,oo rsd za fizička lica po sezoni a za pravna lica 3.600,oo + pdv.!</strong></p>

        <div class="wrapper">
            <div class="title">
                <h1>contact us form</h1>
            </div>
            <div class="contact-form">
                <div class="input-fields">
                    <input type="text" class="input" placeholder="Ime i prezime">
                    <input type="text" class="input" placeholder="Email adresa">
                    <input type="text" class="input" placeholder="Telefon">
                    <input type="text" class="input" placeholder="Naslov">
                </div>
                <div class="msg">
                    <textarea id="place" placeholder="Poruka"></textarea>
                    <div class="btn">posalji</div>
                </div>
            </div>
        </div>





    </div>
</div>


@endsection
