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
                            class="text-left font-weight-bold">参加学会</h3>
                        <div class="form-group text-left"
                            style="margin-bottom:40px;  border-bottom:solid;border-color:#D2D6DC;border-width:1px;">
                            <a href="{{ route('profile.edit', Auth::id()) }}" style="color:#6B778C;">プロフィール</a>
                            <a href="./experience" style="color:#6B778C; margin-left:5%;">経験分野</a>
                            <a href="./education" style="color:#6B778C; margin-left:5%;">学歴</a>
                            <a href="./publication" style="color:#6B778C; margin-left:5%;">出版物</a>
                            <a href="./socialevent" style="color:#6B778C; margin-left:5%;"
                                class="font-weight-bold">参加学会</a>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach ($socialevents as $socialevent)
                                    <div class="card text-left" style="margin-bottom:40px;">

                                        <div class="card-body">
                                            <div class="form-group">

                                                <h5 class="card-title">{{ $socialevent->name }}</h5>
                                                <div class="d-flex flex-row-reverse">


                                                    {{-- 削除ボタン --}}
                                                    <div class="d-inline text-right">
                                                        <form
                                                            action='{{ route('socialevent.destroy', $socialevent->id) }}'
                                                            method='post'>
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

                                                    {{-- 編集ボタン --}}
                                                    <div class="d-inline text-right d-inline mr-2" >
                                                        <a href="{{ route('socialevent.edit', $socialevent->id) }}"
                                                            style="font-size:120%;" class="btn bg-transparent  text-secondary"
                                                            ><i class="fas fa-pen"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="{{ route('socialevent.store') }}" method="post">

                                            {{csrf_field()}}
                                            {{-- {{method_field('PATCH')}} --}}

                                            <div class="form-group" style="color:#6B778C; margin-top:70px;">
                                                <p class="text-left" style="margin-bottom:40px; font-size:20px;">参加学会
                                                </p>
                                                <p class="text-left" style="margin-bottom:40px;">参加した勉強や学会を追加しましょう。
                                                </p>
                                                <textarea name="name" value="" placeholder="ex) PT学会、足底板" cols="68"
                                                    rows="10" class="border"
                                                    style="padding: 2.5rem 3.3rem; background-color:#f1f5f9;border-radius: 6px; width: 100%;"></textarea>
                                            </div>
                                            <button type="submit" class="btn"
                                                style="background-color:#2E77FD;color:white;">追加する</button>

                                        </form>
                                    </div>
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
