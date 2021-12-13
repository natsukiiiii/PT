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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-center" style="border: none">
                    <div class="card-body">
                        <h3 style="margin-bottom: 40px;" class="text-left font-weight-bold">出版物</h3>
                        <div class="form-group">
                            {{-- <a href="./profile/{profile}/edit">プロフィール</a> --}}
                            <a href="{{ route('profile.edit', Auth::id()) }} " style="color:#6B778C;">プロフィール</a>
                            <a href="./experience" style="color:#6B778C; margin-left:5%;">経験分野</a>
                            <a href="./education" style="color:#6B778C; margin-left:5%;">学歴</a>
                            <a href="./publication" style="color:#2E77FD; margin-left:5%;"
                                class="font-weight-bold">出版物</a>
                            <a href="./socialevent" style="color:#6B778C; margin-left:5%;">参加学会</a>

                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach ($publications as $publication)
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h5 class="card-title">{{ $publication->name }}</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <a href="{{ route('publication.edit', $publication->id) }}" class="btn"
                                            style="background-color:#2E77FD;color:white;">編集</a>
                                    </div>
                                    <div class="col-sm-12 text-right">

                                        <form action='{{ route('publication.destroy', $publication->id) }}'
                                            method='post'>
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type='submit' value='削除' class="btn btn-light"
                                                onclick='return confirm("削除しますか？？");'>
                                        </form>
                                    </div>


                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('publication.store', Auth::id()) }}" method="post">
                            {{csrf_field()}}
                            {{-- {{method_field('PATCH')}} --}}

                            <div class="form-group" style="color:#6B778C; margin-top:70px;">
                                <p style="margin-bottom:40px;">出版物</p>
                                <p style="margin-bottom:40px;">出版物へのリンクをここに貼り付けて、あなたのプロフィールに追加します。
                                </p>
                                <textarea name="name" value="" placeholder="ex) PT学会、足底板" cols="68"
                                    rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#2E77FD;color:white;">更新する</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
