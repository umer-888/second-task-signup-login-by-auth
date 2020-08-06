@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgba(236, 48, 20, 0.9);">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                       
                            
                                <input id="email" type="email"  name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus style="width: 70%; display: block; margin:20px 0; padding: 15px; border: 1px solid #b5b5b5; outline: none; height:90%" placeholder="E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        
                                <input id="password" type="password"  name="password" required autocomplete="new-password" style="width: 70%; display: block; margin:20px 0; padding: 15px; border: 1px solid #b5b5b5; outline: none; height:90%" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        

                        
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="width: 70%; display: block; margin:20px 0; padding: 15px; border: 1px solid #b5b5b5; outline: none; height:90%">
                        
                       
                                <button type="submit" style="max-width: 250px; width: 150%;  background: #444444;  color: #f9f9f9; border: none; padding: 10px; text-transform: uppercase; border-radius: 2px;  cursor:pointer;">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
