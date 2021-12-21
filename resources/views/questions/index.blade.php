<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="{{ asset('../../js/app.js') }}"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> --}}
    <title>PT</title>
</head>
<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form style="position: relative;" class="mb-2 mt-4 text-center" method="GET" action="{{ route('questions.index') }}">
                    <div>
                        <input style="width:100%; padding: 0.72em 1.3em;
                    border-radius: 2.5em;
                    margin: 0 auto; background-color:#f1f5f9; transition: .2s; border: 1px solid #0000;"
                            class="form-control my-2 mr-5 " type="search" placeholder=" キーワードを入力..." name="search"
                            value="@if (isset($search)) {{ $search }} @endif">
                        <div class="text-right" style="">
                            <button  style="color:#6B778C; border:none; background:none; position: absolute;top: 10px;
                            right: 35px;"><i class="fas fa-search" type="submit"></i></button>

                        </div>
                        <div>
                            <button style="margin:0 0 40px 0; background-color:#2E77FD;color:white;"
                                class="btn btn-info my-2" type="submit">検索</button>
                            <button class="btn btn-light my-2 ml-5">
                                <a href="{{ route('questions.index') }}" style="color:#6B778C;">クリア</a>
                            </button>
                        </div>



                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h5 style="margin:40px 0 40px 0; font-size:24px;"
class="text-left font-weight-bold"> 質問一覧</h5>
                <div class="text-left">
                        {{-- <a href="{{ route('questions.index') }}">回答募集中</a> --}}

                    @foreach ($questions as $question)
                    <div class="card-body" style="margin-bottom:40px;  border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                        <p style="font-size:16px;" class="card-title font-weight-bold">{{ $question->title }}</p>
                        <p class="text card-text" style="margin:20px 0 40px 0;">{{ $question->text }}</p>


                        <a href="{{ route('questions.show', $question->id) }}" style="margin:0 0 40px 0; background-color:#2E77FD;color:white;"
                            class="btn btn-primary">質問へ回答する</a>
                        <p class="card-text" style="color:#6B778C; font-size: 14px;">{{ $question->user->name }}</p>

                            <p class="card-title" style="color:#6B778C; font-size: 14px;"> {{ $question->created_at->format('Y年m月d日') }}に投稿</p>
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
    <div class="row justify-content-center">
        <div style="margin-left:30px;" class="col-md-auto">

        {{ $questions->appends(request()->input())->links() }}
    </div>
    </div>

    @endsection
</body>
</html>
