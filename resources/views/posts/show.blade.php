@extends('layouts.app')

<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 style="margin-top:40px; font-size:24px;" class="text-left font-weight-bold">{{ $post->title }}
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text card-text">{{ $post->text }}</p>
                    <h5 class="text-left" style="color:#6B778C; font-size: 14px;">{{ $post->user->name }}</h5>

                    <p style="color:#6B778C; font-size: 14px;">{{ $post->created_at->format('Y年m月d日') }}</p>

                    <div class="d-flex flex-row-reverse">
                        {{-- <div class="text-right"> --}}
                        @if(Auth::id() === $post->user_id)
                        <div class="d-inline">
                            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="border-0 bg-transparent h3 text-secondary">
                                    <i class="far fa-trash-alt">
                                        <input type='submit' value='' class="d-none" style=""
                                        onclick='return confirm("削除しますか？？");'>
                                    </i>
                                 </button>
                            </form>
                        </div>
                        <div class="d-inline mr-2">
                            <a href="{{route('posts.edit', $post->id)}}"   style="font-size:120%;" class="btn bg-transparent  text-secondary"
                                ><i class="fas fa-pen"></i></a>

                        </div>

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
                        <textarea
                        name="text" style="border: none; width:100%; border-radius:8px;  padding: 2.5rem 3.3rem;  box-shadow:0px 1px 41px -23px;"
                            class="form-control" placeholder="質問の回答を記入します" rows="5" >{{ old('text') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style="margin:0 0 40px 0; background-color:#2E77FD;color:white;">コメントする</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($post->comments as $comment)
                <div class="card mt-3" style="margin-bottom:40px;">
                    <h5 class="card-body" 　style="color:#6B778C;">{{ $comment->user->name }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $comment->text }}</p>

                        <h5 class="card-title" 　style="color:#6B778C; font-size: 14px;">
                            投稿日時：{{ $comment->created_at->format('Y年m月d日') }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
</body>
