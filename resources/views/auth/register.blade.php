@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

<body class="bg-white">
@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:8%;">
        <div class="col-md-8">
            <div class="card" style="box-shadow:0px 1px 41px -23px; border:none;">

                <div class="card-body">
                    <h5 style="margin-top:20px;font-size:34px;" class="text-center font-weight-bold">Welcome to PT!</h5>
                    <p style="color:#6B778C; margin-bottom:20px;" class="text-center">Register your account</p>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <a style="background:#2E77FD; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px; " href="{{ url('login/twitter') }}"><i class="fab fa-twitter">Twitter</i></a>
                            <a style="background:#2E77FD; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px;" href="{{ url('login/facebook') }}"><i class="fab fa-facebook">Facebook</i></a>
                        </div>
                    </div>
                    <p class="text-center" style="color:#6B778C;">OR</p>



                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="name" style="color:#6B778C;"
                            class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="test@example.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="********">
                                <p style="color:#6B778C; font-size:10px;">8文字以上、英・数・記号が使えます</p>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="background-color:#2E77FD; border-radius: 17px; color:white; width:65%; "
                                type="submit" class="btn btn-primary">
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
</body>
