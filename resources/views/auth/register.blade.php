@extends('layouts.app')

@section('content')
<div class="container">

    <!--Register Form Box-->
    <div class="row">

        <!--Description box-->
        <div class="intro-msg align-self-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>

        <!--Form box-->
        <div class="align-self-center form col-md-6">

            <p class="text-center"><small>#LOGO HERE</small></p>

            <h3 class='text-center'>Sign up</h3>

            <!--Form-->
            <form method="POST" action="{{ route('register') }}">
                @csrf  

                <!-- Full Name Input -->
                <div class="input row-md-6">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="input row-md-6">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--Confirm Password Field-->
                <div class="input row-md-6">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    
                </div>

                <!-- Email Input -->
                <div class="input row-md-6">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Radios for registration options -->
                <div class='radio-options'>

                    <h5>Sign up as:</h5>

                    <input type="radio" name="driver" id="driver">
                    <label class="radio-inline">Courier/Driver</label>
                    
                    <input type="radio" name="customer" id="customer">
                    <label class="radio-inline">Customer</label>

                    <input type="radio" name="guest" id="guest">
                    <label class="radio-inline">Guest</label>

                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>

                <div class='text-center'>
                <p>Already have an account? <a href='{{route('login')}}'>Log in</a></p>
                </div>
            </form>
    </div>
</div>
@endsection
