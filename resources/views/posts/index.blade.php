
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
                                {{-- <form class="form-inline my-2 my-lg-0 ml-2" action="{{ route('posts.index') }}">
                                        <div class="form-group">
                                        <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                                        </div>
                                        <input type="submit" value="検索" class="btn btn-info">
                                    </form> --}}
                                    <form class="mb-2 mt-4 text-center" method="GET" action="{{ route('posts.index') }}">
                                        <input class="form-control my-2 mr-5" type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-info my-2" type="submit">検索</button>
                                            <button class="btn btn-secondary my-2 ml-5">
                                                <a href="{{ route('posts.index') }}" class="text-white">
                                                    クリア
                                                </a>
                                            </button>
                                        </div>
                                    </form>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        <a href="#">回答募集中</a>
                    </div>

                    <div class="card-header">
                        投稿一覧表示する
                    </div>
                    @foreach ($posts as $post)
                    <div class="card-body">
                        {{-- <a href="{{ route('posts.show', ['post' => $post]) }}">
                            {{ $post->name }}
                        </a> --}}
                        <h5 class="card-title">タイトル:{{ $post->title }}</h5>
                        <p class="card-text">本文:{{ $post->text }}</p>
                        <p class="card-text">投稿者:{{ $post->user->name }}</p>

                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                        </div>
                        <div class="card-footer text-muted">
                            投稿日時: {{ $post->created_at }}に投稿
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">投稿</a>

            </div>
            <div class="col-md-2">
                <a href="{{ route('questions.create') }}" class="btn btn-primary">質問</a>

            </div>
        </div>
    </div>

    @endsection
</body>
</html>
