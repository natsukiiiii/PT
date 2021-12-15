@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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


                <div class="text-center">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="border: none;">
                                <input class=""
                                    style="padding: 7px 0;
                                margin: 20px 0;line-height: 1.5; font-weight: 700; border: none; width: 100%; font-size:28px; border-radius:8px;"
                                    type="text" value="" placeholder="Title" name="title">
                                　　 </div>
                            <div class="form-group">
                                <textarea
                                    style="border: none; width:100%; border-radius:8px; padding: 0.5rem 1.3rem;  box-shadow:0px 1px 41px -23px;"
                                    class="form-control " placeholder="治療家、セラピストの治療や知見に関わる知識を書いて共有しましょう。
                                    
ex)論文掲載、学会勉強会情報、症例に最適だった治療" rows="20" name="text">
                    </textarea>
                            </div>
                            <button style="margin-top:40px; background-color:#2E77FD;color:white;" type="submit"
                                class="btn btn-primary">投稿する</button>

                        </form>
                    </div>
                    <a href="#" style="color:#6B778C;">いい記事を書くには？</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
