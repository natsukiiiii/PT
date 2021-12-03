
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
                <div class="card text-center">
                    
                    <div class="card-header">
                        投稿一覧表示する
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">TEST</h5>
                        <p>TEST</p>
                        <p>TEST</p>
                        <p>TEST</p>
                        <p>TEST</p>


                    </div>
                    <div class="card-footer text-muted">
                        2days ago
                    </div>
                    <button type="submit">編集</button>
                    <button type="submit">削除</button>


                </div>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>