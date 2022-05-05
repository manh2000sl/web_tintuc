@extends('layouts.app_backend')

@section('content')


    <div class="col justify-content-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tài khoản') }}</label>

                            <div class="col-mb-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                            <div class="col-mb-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                            <div class="col">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link  " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                            </div>

                    </form>



    </div>

@endsection
