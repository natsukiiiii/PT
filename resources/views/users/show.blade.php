@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card text-center"> --}}
                <div class="text-center">

                    <div class="card-body" >
                        <h3 style="margin-bottom: 40px;" class="text-left font-weight-bold">Settings</h3>
                        <div class="form-group text-left" style="border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                            <a href="{{ route('profile.edit', Auth::id()) }}" style="color:#6B778C;" class="font-weight-bold">プロフィール</a>
                            <a href="{{ route('experience.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;">経験分野</a>
                            <a href="{{ route('education.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;" >学歴</a>
                            <a href="{{ route('publication.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;">出版物</a>
                            <a href="{{ route('socialevent.index', Auth::id()) }}" style="color:#6B778C; margin-left:5%;">参加学会</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group text-left">
                            <img style="color:#6B778C;" src="{{ $user->image_path }}" alt="画像">

                            <div class="form-group" style="color:#6B778C;">表示名 : {{ $profileUser->name }}</div>
                            <div class="form-group" style="color:#6B778C;">職業名 : {{ $user->specialized }}</div>
                            <div class="form-group" style="color:#6B778C;">組織・会社名 : {{ $user->company }}</div>
                            <div class="form-group" style="color:#6B778C;">自己紹介 : {{ $user->about }}</div>


                            {{-- <div>Following</div>
                            <div>Followers</div>
                            <div>現在地</div> --}}
                            <div class="form-group" style="color:#6B778C;">twitter :  <a href="https://twitter.com/{{ $user->twitter_url }}">Twitter</a> </div>
                            <div class="form-group" style="color:#6B778C;">Facebook : <a href="https://www.facebook.com/{{ $user->facebook_url }}">Facebook</a></div>
                            <div class="form-group" style="color:#6B778C;">Instagram : <a href="https://www.instagram.com/{{ $user->instagram_url }}">Instagram</a></div>

                            {{-- <div>medical societies　所属？</div> --}}


                        </div>
                    </div>
                </div>
                @foreach ($experience as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>経験 : {{ $name->name }}</div>

                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($education as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>学歴 : {{ $name->name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($publication as $name)
                <div class="card text-left" style="color:#6B778C;">
                    <div class="card-body">
                        <div class="form-group">
                            <div>出版物 : {{ $name->name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($socialevent as $name)
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
