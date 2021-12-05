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
                    <div class="card-body">
                        <div class="form-group">
                            <div>image</div>
                            <a href="#">edit</a>

                            <div>name</div>
                            <div>Following</div>
                            <div>Followers</div>
                            <div>現在地</div>
                            <div>専攻、sepcific?</div>
                            <div>social profile</div>
                            <a href="#">Add</a>
                            <div>medical societies　所属？</div>
                            <a href="#">Add</a>


                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>概要</div>
                            <a href="#">edit</a>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>経験</div>
                            <a href="#">edit</a>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>学歴</div>
                            <a href="#">edit</a>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>出版物</div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <div>参加した学会</div>
                            <a href="#">edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
</body>

</html>
