@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">@lang('menu.login')</div>
=======
                <div class="card-header">@lang('login.login')</div>
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567

                <div class="card-body">
                    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('menu.email')</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('login.email')</label>
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('menu.password')</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('login.password')</label>
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
<<<<<<< HEAD
                                        @lang('menu.remember_me')
=======
                                        @lang('login.remember_token')
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    @lang('menu.login')
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        @lang('menu.password_forgot')
=======
                                    @lang('login.login')
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
