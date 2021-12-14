@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>タイトル：{{ $question->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">内容：{{ $question->text }}</p>
                <p>投稿日時：{{ $question->created_at }}</p>

                <div class="d-flex flex-row">
                    <a href="{{route('questions.edit', $question->id)}}" class="btn btn-primary">編集</a>
                    <form action="{{route('questions.destroy', $question->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="削除" class="btn btn-light border"
                            onclick='return confirm("本当に削除しますか？？")'>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('questionsComments.store') }}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="question_id" value="{{ $question->id }}">
                {{-- どの質問に紐づいているのか保存している --}}
                <div class="form-group">
                    <label>コメント</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">コメントする</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($question->questionsComments as $questionsComment)
            <div class="card mt-3">
                <h5 class="card-header">投稿者：{{ $questionsComment->user->name }}</h5>
                <div class="card-body">
                    <h5 class="card-title">投稿日時：{{ $questionsComment->created_at }}</h5>
                    <p class="card-text">内容：{{ $questionsComment->text }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
