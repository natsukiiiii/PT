@extends('layouts.app')
<body class="bg-white">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <h5 style="margin-top:40px; font-size:24px;"
                class="text-left font-weight-bold">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->text }}</p>
                <p style="font-size: 14px;">投稿日時：{{ $post->created_at->format('Y年m月d日') }}</p>

                <div class="text-right">
                    @if(Auth::id() === $post->user_id)
                    <a href="{{route('posts.edit', $post->id)}}" class="btn" style="background-color:#2E77FD;color:white;">編集</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="削除" class="btn btn-light border"
                            onclick='return confirm("本当に削除しますか？？")'>
                    </form>
                    @endif

                </div>

            </div>
        </div>
    </div>
    <div class="row justify-content-center text-right">
        <div class="col-md-8">
            <form action="{{ route('comments.store') }}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    {{-- <label style="color:#6B778C;">コメント</label> --}}
                    <textarea style="border: none; width:100%; border-radius:8px; padding: 0.5rem 1.3rem;  box-shadow:0px 1px 41px -23px;"
                    class="form-control" placeholder="質問の回答を記入します" rows="5" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"
                style="margin:0 0 40px 0; background-color:#2E77FD;color:white;">回答する</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($post->comments as $comment)
            <div class="card mt-3" style="margin-bottom:40px;">
                <h5 class="card-body"　style="color:#6B778C;">{{ $comment->user->name }}</h5>
                <div class="card-body">
                    <p class="card-text">{{ $comment->text }}</p>

                    <h5 class="card-title"　style="color:#6B778C; font-size: 14px;">投稿日時：{{ $comment->created_at->format('Y年m月d日') }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
</body>
