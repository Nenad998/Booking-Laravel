@extends('layouts.lay')

@section('content')

    <div class="contact_main_login">
        <div class="contact_section_login">
            <div class="wrapper_login">
                <div class="title_login">
                    <h1>LOGOVANJE</h1>
                </div>
                <div class="contact-form_login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-fields_login">
                            <input  type="email" name="email" class="input" placeholder="Email adresa">
                            <input type="password" name="password" class="input" placeholder="Lozinka">

                            @if (Route::has('password.request'))
                                <a class="forgot_pass_login" href="{{ route('password.request') }}">
                                    {{ __('Zaboravio si nalog?') }}
                                </a>
                            @endif

                            <button type="submit" class="btn">Uloguj se</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
