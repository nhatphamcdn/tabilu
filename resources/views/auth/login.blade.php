@extends('layouts.master')

@section('css_link', asset('/css/systems/login.css'))

{{-- Set Meta Title --}}
@section('metaTitle', 'Login')
{{-- End Set Meta Title --}}

@section('body')
<section id="auth" class="auth">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 col-md-8 offset-md-4 col-sm-12 col-xs-12">
                            <div class="form-login">
                                <form method="POST" action="{{ route('login') }}">
                                    <div class="form-heading">
                                        <h3>{{ __('Log In To Your Account') }}</h3>
                                    </div>
                                    @csrf

                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                                    @endif
                                    
                                    <div class="form-group row">
                                        <label for="email" class="py-2 col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="py-2 col-md-12 col-form-label">{{ __('Password') }}</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group link-forgot text-md-right">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg btn-bg-gradient-x-blue-cyan">
                                                {{ __('Login') }}
                                            </button>

                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
