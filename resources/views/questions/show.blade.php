@extends('layouts.app')

<body class="bg-white">

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 style="margin-top:40px; font-size:24px;" class="text-left font-weight-bold">
                        {{ $question->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="text text-left" style="margin:20px 0 40px 0;">{{ $question->text }}</p>
                    <h5 class="text-left" style="color:#6B778C; font-size: 14px;">{{ $question->user->name }}</h5>

                    <p class="text-left" style="color:#6B778C; font-size: 14px;">
                        {{ $question->created_at->format('Y年m月d日') }}</p>

                    <div class="d-flex flex-row-reverse">
                        @if(Auth::id() === $question->user_id)

                        <div class="d-inline">
                            <form action="{{route('questions.destroy', $question->id)}}" method="post">
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
                        <div class="d-inline">
                            <a href="{{route('questions.edit', $question->id)}}"  style="font-size:120%;" class="btn bg-transparent  text-secondary"
                                ><i class="fas fa-pen"></i></a>

                        </div>
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
                        <textarea name="text" style="border: none; width:100%; border-radius:8px;
                     padding: 2.5rem 3.3rem;  box-shadow:0px 1px 41px -23px;" class="form-control"
                            placeholder="質問の回答を記入します" rows="5" >{{ old('text') }}</textarea>
                    </div>
                    <button style="margin:0 0 40px 0; background-color:#2E77FD;color:white;" type="submit"
                        class="btn btn-primary">回答する</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($question->questionsComments as $questionsComment)
                <div class="card mt-3" style="margin-bottom:40px;">
                    <div class="card-body">
                        <p class="card-text">{{ $questionsComment->text }}</p>
                        <h5 style="color:#6B778C; font-size: 14px;">{{ $question->user->name }}</h5>

                        <p class="card-title" style="color:#6B778C; font-size: 14px;">
                            {{ $questionsComment->created_at->format('Y年m月d日') }}</p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
</body>
