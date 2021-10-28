@extends('layouts.app')

@section('content')

{{--  --}}
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="account-form form-style">
                        <p>User Name  </p>
                        <input type="text" name="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p> Email Address *</p>
                        <input type="email" name="email">
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p>Password *</p>
                        <input type="password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p>Confirm Password *</p>
                        <input type="password" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button type="submit">Register</button>
                        <div class="text-center">
                            <a href="{{ url('/login') }}">Or Login</a>
                        </div>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->



@endsection
