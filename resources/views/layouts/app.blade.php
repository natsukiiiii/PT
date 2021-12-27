<!doctype html>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PT') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('../../css/app.css') }}" rel="stylesheet">
    {{-- <link rel="icon" type="image/png"  href="{{ asset('assets/images/favicon.png')  }}" sizes="16x16"> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon2.ico')  }}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand btn imeline-image d-flex justify-content-center align-items-center m-0"
                    href="{{ route('posts.index') }}" style="background:#2e77fd; color:white; width:9%;height:10%;">
                    {{-- {{ config('app.name', 'PT') }} --}}
                    <p class="m-0">PT</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                {{-- プロフィール情報へリンク --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="false" aria-expanded="false" v-pre>

                            @if(Auth::check())
                             <a style="color:#6B778C;" href="{{ route('users.show', Auth::id()) }}"><i
                                class="fas fa-user-circle fa-lg"> </i> profile </a>
                            @endif
                            @csrf
                            <span class="caret"></span>
                        </a>
                    </ul>
                </div>


                {{-- 投稿、質問　プルダウン --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            @if(Auth::check())
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                投稿 / 質問 <span class="caret"></span>
                            </a>
                            @endif
                            {{-- プルダウンの表示設定 --}}
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('posts.create') }}"
                                    onclick="event.preventDefault(); document.getElementById('posts-form').submit();">
                                    {{ __('投稿') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('questions.create') }}"
                                    onclick="event.preventDefault(); document.getElementById('questions-form').submit();">
                                    {{ __('質問') }}
                                </a>
                                {{-- プルダウン押下後のリンク先設定 --}}
                                <form id="questions-form" action="{{ route('questions.create') }}" method="get"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <form id="posts-form" action="{{ route('posts.create') }}" method="get"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- 解答募集中　プルダウン --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>

                            @if(Auth::check())
                             <a style="color:#6B778C;" href="{{ route('questions.index') }}"><i class="fas fa-school"></i>  回答募集中 </a>
                            @endif
                            @csrf
                            <span class="caret"></span>
                        </a>
                    </ul>
                </div>




                {{-- ナブバーログイン、ログアウト --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form> --}}
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>


            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="../../js/js/main.js"></script>
</body>

</html>
