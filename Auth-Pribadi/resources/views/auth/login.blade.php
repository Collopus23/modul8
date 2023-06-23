@extends('layouts.app')

@section('content')
<br><br><br><br><br><br>
<div class="container-fluid bg-primary align-center">

    <div class="row justify-content-center">

        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">
                    <div class="mt-3 mb-4 text-center">
                        <H1><i class="bi-hexagon-fill me" ></i></H1>
                        <h4><b>Employee Data Master</b></h4>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="row mb-3 justify-content-center">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                <div class="col-md-9 ">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-0">
                                <div class="col-md">

                                    <button type="submit" class="btn btn-primary col-md-11">
                                        <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
