@extends('layouts.app')



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT</title>
</head>

<body class="bg-white">
    @section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card text-center" style="border: none">
                    <div class="card-body">
                        <h3 style="margin-top:40px; margin-bottom: 40px; font-size:34px;"
                        class="text-left font-weight-bold">経験分野</h3>
                        <div class="form-group text-left" style="margin-bottom:40px;  border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                            <a href="{{ route('profile.edit', Auth::id()) }}" style="color:#6B778C; font-size:1em;">プロフィール</a>
                            <a href="./experience" class="font-weight-bold"
                                style="color:#6B778C; margin-left:5%; font-size:1em;">経験分野</a>
                            <a href="./education" style="color:#6B778C; margin-left:5%; font-size:1em;">学歴</a>
                            <a href="./publication" style="color:#6B778C; margin-left:5%; font-size:1em;">出版物</a>
                            <a href="./socialevent" style="color:#6B778C; margin-left:5%; font-size:1em;">参加学会</a>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach ($experiences as $experience)
                                    <div class="card text-left" style="margin-bottom:40px;">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h5 class="card-title">{{ $experience->name }}</h5>
                                                {{-- 編集ボタン --}}
                                                <div class=" text-right">
                                                    <a href="{{ route('experience.edit', $experience->id) }}" class="btn"
                                                        style="background-color:#2E77FD;color:white;">編集</a>
                                                </div>
                                                {{-- 削除ボタン --}}
                                                <div class="text-right">

                                                    <form action=' {{ route('experience.destroy', $experience->id) }}'
                                                        method='post'>
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type='submit' value='削除' class="btn btn-light"
                                                            onclick='return confirm("削除しますか？？");'>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class=" text-right">
                                        <a href="{{ route('experience.edit', $experience->id) }}" class="btn"
                                            style="background-color:#2E77FD;color:white;">編集</a>
                                    </div> --}}

                                    {{-- <div class="text-right">

                                        <form action=' {{ route('experience.destroy', $experience->id) }}'
                                            method='post'>
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type='submit' value='削除' class="btn btn-light"
                                                onclick='return confirm("削除しますか？？");'>
                                        </form>
                                    </div> --}}
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">


                                <form action="{{ route('experience.store') }}" method="post">
                                    {{-- <form action="{{ route('setting.update_experience', $user->id) }}"
                                    method="post">
                                    --}}

                                    {{csrf_field()}}
                                    {{-- {{method_field('PATCH')}} --}}
                                    <div class="form-group text-left" style="color:#6B778C; margin-top:70px;">
                                        <p class="text-left" style="margin-bottom:40px; font-size:20px;">経験分野</p>
                                        <p  class="text-left" style="margin-bottom:40px;">あなたの経験を加える.
                                            同僚を見つけてつながる</p>
                                        <textarea name="name" value="" placeholder="　ex) OO大学病院, リハビリテーション科、整形外来"
                                            cols="68" rows="10" class="border" style="background-color:#f1f5f9;border-radius: 6px; width: 100%;"></textarea>
                                    </div>
                                    <button type="submit" class="btn" style="background-color:#2E77FD;color:white;">追加する</button>

                                </form>
                            </div>
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
