@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>image</div>
                            <a href="#">edit</a>

                            <div>表示名:{{ $user->name }}</div>
                            <div>職業名:{{ $user->specialized }}</div>
                            <div>組織・会社名:{{ $user->company }}</div>
                            <div>自己紹介:{{ $user->about }}</div>


                            {{-- <div>Following</div>
                            <div>Followers</div>
                            <div>現在地</div> --}}
                            <div>twitter: <a href="https://twitter.com/{{ $user->twitter_url }}">Twitter</a> </div>
                            <div>Facebook: <a href="https://www.facebook.com/{{ $user->facebook_url }}">Facebook</a></div>
                            <div>Instagram: <a href="https://www.instagram.com/{{ $user->instagram_url }}">Instagram</a></div>

                            {{-- <div>medical societies　所属？</div> --}}


                        </div>
                    </div>
                </div>
                @foreach ($experience as $name)
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>経験:{{ $name->name }}</div>
                            {{-- <div>経験:{{ $experience->name }}</div> --}}

                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($education as $name)
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>学歴:{{ $name->name }}</div>
                            {{-- <div>経験:{{ $experience->name }}</div> --}}

                        </div>
                    </div>
                </div>
                @endforeach

                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>出版物</div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>参加した学会</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
</body>

</html>
