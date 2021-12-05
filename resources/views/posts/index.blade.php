
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
                    
                    <div class="card-header">
                        投稿一覧表示する
                    </div>
                    @foreach ($posts as $post)
                    <div class="card-body">
                        <h5 class="card-title">タイトル:{{ $post->title }}</h5>
                        <p class="card-text">本文:{{ $post->text }}></p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                        </div>
                        <div class="card-footer text-muted">
                            投稿日時: {{ $post->created_at }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">投稿</a>

            </div>
        </div>
    </div>

    @endsection
</body>
</html>