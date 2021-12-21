@extends('layouts.app')
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="{{ asset('../../js/app.js') }}"></script> --}}
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <title>PT</title>
</head>

<body class="bg-white">
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            {{-- START入力 --}}
            <form action="{{ route('questions.store') }}" method="post">

                {{csrf_field()}}

            {{-- START TITLE --}}
            <div class="form-group" style="border: none;">
                <input name="title" value="{{ old('title') }}"
                style="padding: 7px 0;
            margin: 20px 0;line-height: 1.5; font-weight: 700; border: none; width: 100%; font-size:28px; border-radius:8px;"
            type="text" value="" placeholder="Title" >
                　　 </div>
            {{-- END TITLE --}}



<div class="row" >
            {{-- START入力 --}}
                <div class="text-center col-md-6">
                    <div class="card-body">

                            <div class="form-group">
                                <textarea id="markdown_editor_textarea" name="text" style="border: none; width:100%; border-radius:8px;  padding: 2.5rem 3.3rem;  box-shadow:0px 1px 41px -23px;"
                                class="form-control " placeholder="治療や知見に関する質問をしてみましょう。
新しい可能性が見つかります。

ex)膝OAの痛みの主な原因は脂肪体でしょうか？
ex)肩関節周囲炎が凍結肩に移行し治療が難航しているのですが、、" rows="20" >{{ old('text') }}</textarea>
                            </div>
                            <button style="margin-top:40px; background-color:#2E77FD;color:white;" type="submit"
                            class="text-center btn btn-primary" type="submit" class="btn btn-primary">質問する</button>

                        </form>
                    </div>
                    <a class="text-center" href="#" style="color:#6B778C;">いい記事を書くには？<i class="fas fa-arrow-right"></i></a>
                </div>
            {{-- END入力 --}}


            {{-- STARTプレビュー --}}
                <div class="col-md-6">
                    <div class="card-body">
                        
                            <div class="form-group" id="markdown_preview" style=" padding: 1rem;
                            height: 34rem; border: none; width:100%; border-radius:8px;  padding: 2.5rem 3.3rem;  box-shadow:0px 1px 41px -23px;">
                                
                            </div>
                           
                    </div>
                </div>
            </div>
            {{-- ENDプレビュー --}}

            </div>
        </div>
    </div>

    @endsection
</body>

</html>
