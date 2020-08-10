@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgba(236, 48, 20, 0.9);">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 70%; display: block; margin:20px 0; padding: 15px; border: 1px solid #b5b5b5; outline: none; height:90%" placeholder="E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <button type="submit" style="max-width: 250px; width: 150%;  background: #444444;  color: #f9f9f9; border: none; padding: 10px; text-transform: uppercase; border-radius: 2px;  cursor:pointer;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
