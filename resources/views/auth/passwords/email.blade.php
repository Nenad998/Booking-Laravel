@extends('layouts.custom')

@section('email')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="form-container">
        <form method="POST" action="{{ route('password.email') }}" class="form-wrap">
            @csrf

            <h2>Reset password</h2>
            <div class="form-box">
                <input type="email" placeholder="Enter Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="form-submit">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>

@endsection
