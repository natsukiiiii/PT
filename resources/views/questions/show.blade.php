@extends('layouts.app')
<body class="bg-white">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <h5 style="margin-top:40px; font-size:24px;"
                class="text-left font-weight-bold">{{ $question->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $question->text }}</p>
                <p style="font-size: 14px;">投稿日時：{{ $question->created_at->format('Y年m月d日') }}</p>

                <div class="text-right">
                    @if(Auth::id() === $question->user_id)
                    <a href="{{route('questions.edit', $question->id)}}" class="btn" style="background-color:#2E77FD;color:white;">編集</a>
                    <form action="{{route('questions.destroy', $question->id)}}" method="post">
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
            <form action="{{ route('questionsComments.store') }}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="question_id" value="{{ $question->id }}">
                {{-- どの質問に紐づいているのか保存している --}}
                <div class="form-group">
                    {{-- <label style="color:#6B778C;">コメント</label> --}}
                    <textarea style="border: none; width:100%; border-radius:8px;
                    padding: 0.5rem 1.3rem;  box-shadow:0px 1px 41px -23px;"
                    class="form-control" placeholder="質問の回答を記入します" rows="5" name="text"></textarea>
                </div>
                <button style="margin:0 0 40px 0; background-color:#2E77FD;color:white;"
                 type="submit" class="btn btn-primary">回答する</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($question->questionsComments as $questionsComment)
            <div class="card mt-3" style="margin-bottom:40px;">
                <h5 class="card-body" style="color:#6B778C;">投稿者：{{ $questionsComment->user->name }}</h5>
                <div class="card-body">
                    <p class="card-text">内容：{{ $questionsComment->text }}</p>
                    <h5 class="card-title" style="color:#6B778C; font-size: 14px;">投稿日時：{{ $questionsComment->created_at->format('Y年m月d日') }}</h5>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
</body>
