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


                <div class="text-center">
                    <div class="card-body">
                        <h3 style="margin-top:40px; margin-bottom: 40px; font-size:34px;"
                            class="text-left font-weight-bold">Settings</h3>
                        <form action="{{ route('profile.update', Auth::id()) }}" method="post"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group text-left" style="border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                                <a style="color:#6B778C;" href="{{ route('users.show', Auth::id()) }}">プロフィール情報</a>
                                <a style="color:#6B778C; margin-left:5%; font-size:1em;" href="./edit">プロフィール</a>
                                <a style="color:#6B778C; margin-left:5%; font-size:1em;"
                                    href="../../experience">経験分野</a>
                                <a style="color:#6B778C; margin-left:5%; font-size:1em;" href="../../education">学歴</a>
                                <a style="color:#6B778C; margin-left:5%; font-size:1em;"
                                    href="../../publication  ">出版物</a>
                                <a style="color:#6B778C; margin-left:5%; font-size:1em;"
                                    href="../../socialevent">参加学会</a>
                                <br>
                                {{-- <a href="{{ route('users.show', Auth::id()) }}">検索</a> --}}

                            </div>
                            {{-- <div class="form-group">
                                <label for="image">画像</label>
                               <input type="file" class="form-control-file" id="image" name="image">
                                <a href="">変更する</a>
                            </div> --}}

                            <div class="form-group" class="text-left" style="margin-top:40px;">
                                <p style="color:#6B778C;" for="image" class="text-left">画像</p>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>


                            <div class="form-group" class="text-left">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">表示名</p>
                                <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->name }}" placeholder="氏名"
                                    name="name">
                                {{-- <input type="text" value="{{ ($user->name) }}" placeholder="氏名" name="name"> --}}

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">職業名</p>
                               <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->specialized }}" placeholder="職業名"
                                    name="specialized">
                                {{--<input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" type="text" value="{{ $user->specialized }}" placeholder="職業名"
                                name="specialized"> --}}

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">組織・会社名</p>
                               <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->company }}" placeholder="組織・会社名"
                                    name="company">

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">自己紹介</p>
                                    <textarea style="padding: 0.6em 0 0.6em 0.7em;
                                    line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->about }}" placeholder="自己紹介"
                                        name="about" cols="71" rows="5"></textarea>

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">twitterユーザー名</p>
                               <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->twitter_url }}"
                                    placeholder="@なしで入力" name="twitter_url">

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">Facebookユーザー名</p>
                               <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->facebook_url }}"
                                    placeholder="ユーザー名だけ入力" name="facebook_url">

                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color:#6B778C; margin-top:40px;">Instagramユーザー名</p>
                               <input style="padding: 0.6em 0 0.6em 0.7em;
                                line-height: 1.4; width:100%; background-color:#f1f5f9;" class="card" type="text" value="{{ $user->instagram_url }}"
                                    placeholder="ユーザー名だけ入力" name="instagram_url">

                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color:#2E77FD;color:white;">更新する</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
