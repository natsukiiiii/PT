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
    {{-- @dd($experience); --}}
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card text-center">
                    <div class="card-body">
                        <h3>経験分野</h3>
                        <div class="card-body">
                            {{-- <h5 class="card-title">経験分野 : {{ $experience->name }}</h5> --}}

                        </div>


                            <form action="{{ route('experience.update', $experience->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <p>経験した分野</p>
                                <textarea name="name" value="{{ $experience->name }}" placeholder="ex) OO大学病院, リハビリテーション科、整形外来" cols="30" rows="10">
                                    {{ $experience->name }}
                                </textarea>

                            <br><button type="submit" class="btn btn-primary">編集する</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
