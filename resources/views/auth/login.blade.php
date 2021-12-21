@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

<body class="bg-white">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top:8%;">
            <div class="card" style="box-shadow:0px 1px 41px -23px; border:none;">

            <div class="card-body">
                <h5 style="margin-top:20px;font-size:34px;" class="text-center font-weight-bold">Welcome back to PT!</h5>
                <p style="color:#6B778C; margin-bottom:20px;" class="text-center">Login your account</p>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-3">
                        {{-- <a style="background:#2E77FD; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px; " href="{{ url('login/twitter') }}"><i class="fab fa-twitter">Twitter</i></a> --}}
                        {{-- <a style="background:#2E77FD; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px;" href="{{ url('login/facebook') }}"><i class="fab fa-facebook">Facebook</i></a> --}}
                        <a class="h6 " style="background:#2E77FD; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px;" href="{{ url('login/google') }}"><i class="fab fa-google"> Login with Google</i></a>
                        <a class="h6 "  style="background:#00b900;; color:white; padding: 10px 8px; border-radius:6px; margin-left:10px;" href="{{ url('login/line') }}"><i class="fab fa-line"> Login with Line</i></a>

                    
                    </div>
                </div>
                <p class="text-center" style="color:#6B778C;">OR</p>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" style="color:#6B778C;"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input placeholder="test@example.com" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" style="color:#6B778C;"
                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="********">
                            <p style="color:#6B778C; font-size:10px;">8文字以上、英・数・記号が使えます</p>

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
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label style="color:#6B778C;" class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn"
                                style="background-color:#2E77FD; border-radius: 17px; color:white; width:47%; "
                                type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-md-8 offset-md-4">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" style="color:#2E77FD;" href="{{ route('password.request') }}">
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
</body>

