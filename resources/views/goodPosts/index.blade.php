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
                    <div class="card-body text-left" style="color:#4a4a4a;">
                        <h3 style="border-bottom:solid 0.5px#6B778C; margin-top:40px; margin-bottom: 40px; font-size:34px;"
                            class="text-left font-weight-bold">いい記事を書くには？</h3>
                       <br>
                            <h5>PTは、治療に関する知識を記録・共有するためのサービスです。PT上の記事は、投稿者以外の人にとっても価値のある記事であることが望まれます。

                                あなたの知識が他の誰かの役に立つようにするために、このガイドラインを参考にしてください。</h5><br><br>
                            <h4>・具体的で簡潔なタイトルをつける</h4>

                            <h4>・環境や前提条件を説明する</h4>
                            <h4>・引用元や参考元へのリンクを書く
                            </h4>
                            <h4>・著作権に気をつける</h4>
                            <h4>・ライセンスや秘密保持契約に気をつける</h4>
                            <h4></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
