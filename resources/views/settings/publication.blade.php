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
                        <h3>Settings</h3>
                            <form action="{{ route('setting.update_publication', $user->id) }}" method="post">
                            {{-- <form action="{{ route('setting.update_education', $user->id) }}" method="post"> --}}

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
                                <p>出版物</p>
                                <p>出版物へのリンクをここに貼り付けて、あなたのプロフィールに追加します。
                                    </p>
                                <textarea name="name" value="" placeholder="ex) スポーツ整形" cols="30" rows="5"></textarea>
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
