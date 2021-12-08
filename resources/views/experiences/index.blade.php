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
                        <h3>経験分野</h3>
                        @foreach ($experiences as $experience)
                        <div class="card-body">
                            <h5 class="card-title">タイトル：{{ $experience->name }}</h5>

                            <a href="#" class="btn btn-primary">編集</a>
                            <a href="#" class="btn btn-primary">削除</a>

                        </div>
                        @endforeach


                            <form action="{{ route('experience.store') }}" method="post">
                            {{-- <form action="{{ route('setting.update_experience', $user->id) }}" method="post"> --}}

                                {{csrf_field()}}
                                {{-- {{method_field('PATCH')}} --}}
                            <div class="form-group">
                               <a href="#">プロフィール</a>
                               <a href="#">経験分野</a>
                               <a href="#">学歴</a>
                               <a href="#">出版物</a>
                               <a href="#">参加学会</a>
                            </div>
                            <div class="form-group">
                                <p>経験分野</p>
                                <p>あなたの経験を加える
                                    同僚を見つけてつながる</p>
                                <textarea name="name" value="" placeholder="ex) OO大学病院, リハビリテーション科、整形外来" cols="30" rows="10"></textarea>
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