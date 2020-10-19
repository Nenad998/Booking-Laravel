@extends('layouts.lay')
@section('title') <title>Registracija</title>@stop

@section('content')
    <div class="contact_main_login">
        <div class="contact_section_login">

            @error('ime')  @enderror{{ old('ime') }} @error('ime')
            <div class="register_name">{{ $message }}</div>
            @enderror

            @error('password')  @enderror{{ old('password') }} @error('password')
            <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
            @enderror

            <div class="wrapper_login">
                <div class="title_login">
                    <h1>REGISTRACIJA</h1>
                </div>
                <div class="contact-form_login">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-fields_login">
                            <input id="name" type="text"  class="input" placeholder="Ime">

                            <input id="email" type="email"   class="input" placeholder="Email Adresa">



                            <input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" class="input" placeholder="Lozinka">
                            @error('password')

                            @enderror


                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="input" placeholder="Potvrdi lozinku">

                            <button type="submit" class="btn">REGISTRUJ SE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
