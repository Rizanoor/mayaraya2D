@extends('layouts.auth')

@section('title')
    Mayaraya
@endsection

@section('content')

        <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div class="left-column text-start d-flex flex-lg-grow-1 justify-content-center pe-0">
                <img class=" img-fluid main-img" src="images/img_landmark2.png" alt=""
                data-aos="zoom-in" />
            </div>
            <!-- Right Column -->
            <div class="right-column d-flex flex-column align-items-lg-end text-lg-end align-items-center text-center">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="card" data-aos="zoom-in">
                        <div class="border-0">
                            <div class="text-center title-masuk">Daftar</div>
                        </div>

                        <div class="input-group" style="flex-wrap: nowrap; padding-right: 5px">
                            <label for="name" class="w-100">
                            <input type="text" id="name" name="name" class="form-control mt-2 @error('name') is-invalid @enderror"
                                autofocus placeholder="Username" required
                                value="{{ old('name') }}" />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </label>

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

                        <div class="input-group">
                            <label for="password-confirm" class="w-100">
                                <input type="password" id="password-confirm" name="password_confirmation"
                                    class="form-control mt-2"
                                    placeholder="Konfirmasi password" required />
                            </label>
                        </div>

                        <button type="submit" class="btn btn-card">Daftar</button>

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
                                Sudah punya akun ?
                                <a href="{{ route('login') }}" class="link"> Masuk di sini</a>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
