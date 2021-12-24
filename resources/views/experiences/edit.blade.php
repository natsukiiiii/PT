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
    {{-- @dd($experience); --}}
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="text-center">
                    <div class="card-body">
                        <h3 style="margin-top:40px; font-size:34px;"
                        class="text-left font-weight-bold">経験分野</h3>
                        <div class="card-body">
                            {{-- <h5 class="card-title">経験分野 : {{ $experience->name }}</h5> --}}

                        </div>


                            <form action="{{ route('experience.update', $experience->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <p class="text-left" style=" font-size:16px;color:#6B778C;">経験した分野を編集します。</p>
                                <textarea class="border text-left"name="name" value="{{ $experience->name }}"placeholder="ex) OO大学病院, リハビリテーション科、整形外来"cols="30" rows="10"style="background-color:#f1f5f9;border-radius: 6px; width: 100%;">{{ $experience->name }}</textarea>

                            <br><button type="submit" class="btn btn-primary" style="margin-top:40px; background-color:#2E77FD;color:white;">編集する</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
