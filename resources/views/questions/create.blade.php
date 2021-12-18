@extends('layouts.app')
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


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
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="text-center">
                    <div class="card-body">
                        <form action="{{ route('questions.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="border: none;">
                                <input class=""
                                style="padding: 7px 0;
                            margin: 20px 0;line-height: 1.5; font-weight: 700; border: none; width: 100%; font-size:28px; border-radius:8px;"
                            type="text" value="" placeholder="Title" name="title">
                                　　 </div>
                            <div class="form-group">
                                <textarea style="border: none; width:100%; border-radius:8px; padding: 0.5rem 1.3rem;  box-shadow:0px 1px 41px -23px;"
                                class="form-control " placeholder="
治療や知見に関する質問をしてみましょう。
新しい可能性が見つかります。

ex)膝OAの痛みの主な原因は脂肪体でしょうか？
ex)肩関節周囲炎が凍結肩に移行し治療が難航しているのですが、、" rows="20" name="text">
                    </textarea>
                            </div>
                            <button style="margin-top:40px; background-color:#2E77FD;color:white;" type="submit"
                            class="btn btn-primary" type="submit" class="btn btn-primary">質問する</button>

                        </form>
                    </div>
                    <a href="#" style="color:#6B778C;">いい記事を書くには？<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
