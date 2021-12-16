<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
                <form class="mb-2 mt-4 text-center" method="GET" action="{{ route('posts.index') }}">
                    <div>
                        <input style="padding: 0.72em 1.3em;
                    border-radius: 2.5em;
                    margin: 0 auto; background-color:#f1f5f9; transition: .2s; border: 1px solid #0000; position: relative;"
                            class="form-control my-2 mr-5" type="search" placeholder=" キーワードを入力..." name="search"
                            value="@if (isset($search)) {{ $search }} @endif">
                        <div class="text-right" style="position: relative; top:-33px; left:-46px; color:#6B778C;">
                            <i class="fas fa-search"></i>

                        </div>
                        <div>
                            <button style="margin:0 0 40px 0; background-color:#2E77FD;color:white;"
                                class="btn btn-info my-2" type="submit">検索</button>
                            <button class="btn btn-light my-2 ml-5">
                                <a href="{{ route('posts.index') }}" style="color:#6B778C;">クリア</a>
                            </button>
                        </div>



                    </div>
                </form>
            </div>
            <div class="col-md-8">


                <h5 style="margin:40px 0 40px 0; font-size:24px;" class="text-left font-weight-bold"> 投稿一覧</h5>
                <div class="text-left">
                    {{-- <div class="card-header">
                        <a href="{{ route('questions.index') }}">!! 回答募集中 !!</a>
                    </div> --}}
                    @foreach ($posts as $post)


                    <div class="card-body"
                        style="margin-bottom:40px;  border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                        <h5 style="font-size:16px;" class="card-title font-weight-bold">{{ $post->title }}</h5>
                        <p class="card-text" style="margin:20px 0 40px 0;">{{ $post->text }}</p>
                        <a href="{{ route('posts.show', $post->id) }}"
                            style="margin:0 0 40px 0; background-color:#2E77FD;color:white;"
                            class="btn btn-primary">詳細</a>

                        <p class="card-text" style="color:#6B778C; font-size: 12px;">{{ $post->user->name }}</p>
                        <p class="card-text" style="color:#6B778C; font-size: 10px;">
                            {{ $post->created_at->format('Y年m月d日') }}に投稿</p>

                    </div>

                    @endforeach
                </div>
            </div>

            {{-- <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">投稿</a>

        </div>
        <div class="col-md-2">
            <a href="{{ route('questions.create') }}" class="btn btn-primary">質問</a>

        </div> --}}
    </div>
    </div>

    @endsection
</body>

</html>
