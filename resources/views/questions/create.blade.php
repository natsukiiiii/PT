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


                <div class="card text-center">
                    <div class="card-body">
                        <form action="{{ route('questions.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" value="" placeholder="タイトル" name="title">
                                　　 </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="本文
                    治療家、セラピストの治療や知見に関わる知識を書いて共有しよう
                    ex)論文掲載、学会勉強会情報、症例に最適だった治療" rows="20" name="text">
                    </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">質問する</button>

                        </form>
                    </div>
                    <a href="#">いい記事を書くには？</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
