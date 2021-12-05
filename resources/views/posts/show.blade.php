@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>タイトル：{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">内容：{{ $post->text }}</p>
                <p>投稿日時：{{ $post->created_at }}</p>

             <div class="d-flex flex-row">
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">編集</a>
                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input type="submit" value="削除" class="btn btn-light border" onclick='return confirm("本当に削除しますか？？")'>
                </form>
             </div>

            </div>
        </div>
    </div>
</div>
@endsection