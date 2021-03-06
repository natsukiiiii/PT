@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT</title>
</head>

<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card text-center">
                    <div class="card-body">
                        <h3>Settings</h3>
                        <form action="{{ route('setting.update_information', $user->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                            <div class="form-group">
                               <a href="#">プロフィール</a>
                               <a href="#">経験分野</a>
                               <a href="#">学歴</a>
                               <a href="#">出版物</a>
                               <a href="#">参加学会</a>
                            </div>
                            <div class="form-group">
                                <p>image</p>
                               <img src="" alt="" name="image">
                                <a href="">変更する</a>
                            </div>
                            <div class="form-group">
                                <p>表示名</p>
                                <input type="text" value="{{ $user->name }}" placeholder="氏名" name="name">
                            </div>
                            <div class="form-group">
                                <p>職業名</p>
                                <input type="text" value="{{ $user->specialized }}" placeholder="職業名" name="specialized">
                            </div>
                            <div class="form-group">
                                <p>組織・会社名</p>
                                <input type="text" value="{{ $user->company }}" placeholder="組織・会社名" name="company">
                            </div>
                            <div class="form-group">
                                <p>自己紹介</p>
                                <input type="text" value="{{ $user->about }}" placeholder="自己紹介" name="about">
                            </div>
                            <div class="form-group">
                                <p>twitterユーザー名</p>
                                <input type="text" value="{{ $user->twitter_url }}" placeholder="@なしで入力" name="twitter_url">
                            </div>
                            <div class="form-group">
                                <p>Facebookユーザー名</p>
                                <input type="text" value="{{ $user->facebook_url }}" placeholder="ユーザー名だけ入力" name="facebook_url">
                            </div>
                            <div class="form-group">
                                <p>Instagramユーザー名</p>
                                <input type="text" value="{{ $user->instagram_url }}" placeholder="ユーザー名だけ入力" name="instagram_url">
                            </div>
                            <button type="submit" class="btn btn-primary">更新する</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
