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
                        <h3>学歴</h3>
                            <form action="{{ route('education.store') }}" method="post">
                                @foreach ($educations as $education)
                                <div class="card-body">
                                    <h5 class="card-title">タイトル：{{ $education->name }}</h5>

                                    <a href="#" class="btn btn-primary">編集</a>
                                    <a href="#" class="btn btn-primary">削除</a>

                                </div>
                                @endforeach

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
                                <p>学歴</p>
                                <p>あなたの学校のネットワークにいる卒業生を見つけて、つながりましょう。
                                    </p>
                                <textarea name="name" value="" placeholder="ex) OO大学, OO学部" cols="30" rows="5"></textarea>
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
