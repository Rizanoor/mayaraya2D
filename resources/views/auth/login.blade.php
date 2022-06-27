@extends('layouts.auth')

@section('title')
    Mayaraya
@endsection

@section('content')
<div>
    <div class="mx-auto d-flex flex-lg-row flex-column hero">
    <!-- Right Column -->
    <div class="left-column text-start d-flex flex-lg-grow-1 justify-content-center pe-0">
        <img class=" img-fluid main-img" src="images/img_landmark2.png" alt=""
        data-aos="zoom-in" />
    </div>
    <!-- Left Column -->
    <div class="right-column d-flex flex-column align-items-lg-end text-lg-end align-items-center text-center">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card" data-aos="zoom-in">
                <div class="border-0">
                    <div class="text-center title-masuk">Masuk</div>
                </div>

                <div class="input-group">


                    <label for="email" class="w-100">
                    <input type="email" id="email" name="email" class="form-control mt-2 @error('email') is-invalid @enderror"
                        autofocus placeholder="Email" required
                        value="{{ old('email') }}" />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </label>
                </div>

                <div class="input-group">
                    <label for="password" class="w-100">
                    <input type="password" id="password" name="password" class="form-control mt-2  @error('email') is-invalid @enderror"
                        placeholder="Password" required />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
                        <a href="{{ route('password.request') }}" class="forgot-password">Lupa Password?</a>
                    </div>
                @endif

                <button type="submit" class="btn btn-card">Masuk</button>

                <div class="text-center atau">
                    <span class="garis-1"></span>
                    <span class="text-masuk">atau daftar dengan</span>
                    <span class="garis-2"></span>
                  </div>

                  <a href="{{ route('google.login') }}" class="btn btn-card-social" style="text-decoration:none; color:#5C2C8F">
                    <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/50524134.svg" alt="" />
                    <span>Google</span>
                  </a>

                    <div class="text-center mt-3 text-muted register">
                        Tidak punya akun ?
                        <a href="{{ route('register') }}" class="link"> Daftar di sini</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>






    <div class="container" style="display: none">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
