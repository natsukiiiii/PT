@extends('layouts.app')
<body class="bg-white">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center">
            <form action="{{ route('questions.update', $question->id) }}" method="POST">
            {{csrf_field()}}
            {{method_field('PATCH')}}
                <div class="form-group">
                    {{-- <label>タイトル</label> --}}
                    <input style="padding: 7px 0;
                    margin: 20px 0;line-height: 1.5; font-weight: 700; border: none; width: 100%; font-size:16px; border-radius:8px;" type="text" class="form-control" value="{{ $question->title }}" name="title">
                </div>
                <div class="form-group">
                    {{-- <label>内容</label> --}}
                    <textarea style="border: none; width:100%; border-radius:8px; padding: 0.5rem 1.3rem;  box-shadow:0px 1px 41px -23px;"  class="form-control" rows="5" name="text">{{ $question->text }}</textarea>
                </div>
                <button style="margin-top:40px; background-color:#2E77FD;color:white;" type="submit" class="btn btn-primary">更新する</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
</body>
