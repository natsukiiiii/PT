@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="{{ asset('../../js/app.js') }}"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> --}}
    <title>PT</title>
</head>

<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card text-center"> --}}
                <div class="text-center">

                    <div class="card-body" >
                        <h3 style="margin:40px 0 40px 0;font-size:34px;" class="text-left font-weight-bold">Profile</h3>
                        <div class="form-group text-left" style="border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                            <a href="{{ route('profile.edit', Auth::id()) }}" style="color:#6B778C;" class="font-weight-bold"><i class="fas fa-pen-fancy"></i> プロフィール</a>
                            <a href="{{ route('experience.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;"><i class="fas fa-pen-fancy"></i> 経験分野</a>
                            <a href="{{ route('education.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;" ><i class="fas fa-pen-fancy"></i> 学歴</a>
                            <a href="{{ route('publication.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;"><i class="fas fa-pen-fancy"></i> 出版物</a>
                            <a href="{{ route('socialevent.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;"><i class="fas fa-pen-fancy"></i> 参加学会</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group text-left">
                            {{-- <img style="color:#6B778C;" src="{{ $user->image_path }}" alt="画像"> --}}


                            @if ($user->image_path == null)
                        <img src="{{ asset('assets/images/noImege.png') }}" class="rounded-circle img-thumbnail mb-3" width="150px" height="150px" alt="{{ $user->image_path }}">
                        @else
                        <img src="{{ $user->image_path }}" class="rounded-circle img-thumbnail mb-3" width="150px" height="150px" alt="{{ $user->image_path }}">
                        @endif


                            <div class="form-group" style="color:#6B778C;">表示名 : {{ $profileUser->name }}</div>
                            <div class="form-group" style="color:#6B778C;">職業名 : {{ $user->specialized }}</div>
                            <div class="form-group" style="color:#6B778C;">組織・会社名 : {{ $user->company }}</div>
                            <div class="form-group" style="color:#6B778C;">自己紹介 : {{ $user->about }}</div>


                            {{-- <div>Following</div>
                            <div>Followers</div>
                            <div>現在地</div> --}}
                            @if($user->twitter_url == null)
                            <div class="form-group" style="color:#6B778C;">twitter :  </div>
                            @else
                            <div class="form-group" style="color:#6B778C;">twitter :  <a href="https://twitter.com/{{ $user->twitter_url }}" target="_blank">Twitter</a> </div>
                           @endif

                           @if($user->facebook_url == null)
                           <div class="form-group" style="color:#6B778C;">Facebook :  </div>
                           @else
                           <div class="form-group" style="color:#6B778C;">Facebook : <a href="https://www.facebook.com/{{ $user->facebook_url }} " target="_blank">Facebook</a></div>

                          @endif

                          @if($user->instagram_url == null)
                          <div class="form-group" style="color:#6B778C;">Instagram :  </div>
                          @else
                          <div class="form-group" style="color:#6B778C;">Instagram : <a href="https://www.instagram.com/{{ $user->instagram_url }}" target="_blank">Instagram</a></div>

                         @endif


                            {{-- <div>medical societies　所属？</div> --}}


                        </div>
                    </div>
                </div>
                {{-- @dd($user->id); --}}
                {{-- @dd($user_id); --}}

                {{-- @dd($user->id); --}}
                {{-- @if($user->id === $user_id) --}}
                

                @foreach ($user->experience as $name)

                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>経験 : {{ $name->name }}</div>

                        </div>
                    </div>
                </div>
                @endforeach
                {{-- @endif --}}

                @foreach ($user->education as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>学歴 : {{ $name->name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($user->publication as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>出版物 : {{ $name->name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($user->socialevent as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>参加した学会 : {{ $name->name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    @endsection
</body>

</html>
