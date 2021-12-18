<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>PT</title> --}}

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('posts/index') }}">投稿一覧</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div> --}}

    <div class="content">
        <div class="container">
            {{-- <div class="title m-b-md">
                PT
            </div> --}}
     <div class="flex-center position-ref full-height" style="height: 7vh;">
     {{-- <div class="flex-center position-ref"> --}}

        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            {{-- <a href="{{ url('posts/index') }}">投稿一覧</a> --}}
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>


            <div style="background:#ECEEF0; padding:20px 20px;">2020/12/1 投稿一覧を更新しました。
            </div>
            <div class="row justify-content-left" style="margin-top:70px; width: 100%; display: flex; flex-wrap: wrap;">
                <div class="col-md-6" >
                    <div class="mt-3">
                        <div class="card-body" style="margin:0 0 0 0">
                            <h3 style="color:#6B778C; font-size: 34px;" class="text-left">いつでも、どこでも学べる場所がここにあります。</h3>
                        </div>
                        <div class="card-body" style="margin:40px 0 40px; 0">
                            <p>医療従事者の皆様が、ご自身のプロフィールを公開したり、キャリアの成果をアピールしたり、最新の医療技術に取り組む仲間と情報交換できるプラットフォームです。</p>



                            <a href="{{ route('register') }}"
                            style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                            Register</a>







                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <img src="{{ asset('assets/images/toppage.png') }}" style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                        width="750px" height="750px" alt="">
                </div>

            </div>




            <div class="col-md-12">
                <div class="mt-3">
                    <div class="card-body" style="margin:70px 0 40px; 0">
                        <h3 style="color:#6B778C; font-size: 34px;" class="text-center">
                            医療従事者のための
                            情報源
                        </h3>
                        <p style="margin:20px 0 40px; 0">
                            もう休みの日に遠くの勉強会へ行く必要はありません。
                            検索一つで、いつでもどこでもあなただけの情報を

                        </p>
                    </div>

                </div>
            </div>

               <a href="{{ route('register') }}"
                            style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                            Register</a>

                <div class="d-flex flex-row">
                    <div class="col-md-6 text-right d-inline">
                        <img src="{{ asset('assets/images/sitePhoto1.png') }}" style="margin-top:20px;" class="text-right img-thumbnail mb-3"
                            width="750px" height="750px" alt="">
                    </div>
                    <div class="col-md-6 text-right d-inline">
                        <img src="{{ asset('assets/images/sitePhoto2.png') }}" style="margin-top:20px;" class="text-right img-thumbnail mb-3"
                            width="750px" height="750px" alt="">
                    </div>

                </div>
                <div class="d-flex flex-row">

                <div class="col-md-6 text-right d-inline">
                    <img src="{{ asset('assets/images/sitePhoto3.png') }}" style="margin-top:20px;" class="text-right img-thumbnail mb-3"
                        width="750px" height="750px" alt="">
                </div>
                <div class="col-md-6 text-right d-inline">
                    <img src="{{ asset('assets/images/sitePhoto4.png') }}" style="margin-top:20px;" class="text-right img-thumbnail mb-3"
                        width="750px" height="750px" alt="">
                </div>
                </div>
            {{-- section1 --}}
            <div class="row justify-content-left" style="margin-top:70px;">
            <div class="col-md-6 text-left">
                    <div class="card-body" style="margin:70px 0 40px; 0">


                        <h3 style="color:#6B778C; font-size: 34px;" class="text-left">もう失敗しない治療選択</h3>
                        <div class="card-body text-left" style="margin:70px 0 40px; 0">
                            現場の先輩に相談したけど、原因組織が特定できない。。
                            書籍には一般情報ばかりで、既往歴や現病歴を加味するといまいち適応できない。
                            そんな皆さんの悩みを解決する答えがここにあります。
                        </div>
                           <a href="{{ route('register') }}"
                            style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                            Register</a>

                    </div>
            </div>

                    <div class="col-md-6 text-right">

                        <img
                        src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab"
                        srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F486ce1f77c4341a58699ea72c115dfab"
                        className="image"
                      style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                            width="750px" height="750px" alt="">
                    </div>
            </div>





        {{-- section2 --}}


        <div class="row justify-content-left" style="margin-top:70px;">
            <div class="col-md-6 text-left">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F151c3a674a6e4811bcd27cb353363447"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">
            </div>
            <div class="col-md-6 text-left">
                    <div class="card-body" style="margin:70px 0 40px; 0">


                        <h3 style="color:#6B778C; font-size: 34px;" class="text-left">学生の臨床体験を高める</h3>
                        <div class="card-body" style="margin:70px 0 40px; 0">
                            ケース学習、実習のセミナー発表で徹夜している学生へ。

                            現役の医療専門家の最新情報を取得できるプラットフォームがここにあります。
                            現役の医療専門家の最新情報を取得して、
                            ケース学習や臨床実習の課題を解決しませんか？
                        </div>
                        <a href="{{ route('register') }}"
                        class="text-left" style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                        Register</a>

                    </div>
            </div>


            </div>

    {{-- section3 --}}
        <div class="row justify-content-left" style="margin-top:70px;">

            <div class="col-md-6 text-left">
                    <div class="card-body" style="margin:70px 0 40px; 0">


                        <h3 style="color:#6B778C; font-size: 34px;" class="text-left">欲しい情報はいつも手元に</h3>
                        <div class="card-body" style="margin:70px 0 40px; 0">
                            ネットの情報は書籍や論文よりエビデンスが低い？

                            論文や学会、勉強会の参加実績のある人たちの最新情報を取得できます。
                            実名性のため気になる教授の情報もワンクリックで。
                            もう書籍あさりは必要ありません。
                        </div>
                      <a href="{{ route('register') }}"
                        class="text-left" style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                        Register</a>

                    </div>
            </div>
            <div class="col-md-6 text-left">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Ffaa43a5cbc2d4e2c9ec6c01ba7d8863f"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">
            </div>


            </div>


    <div class="col-md-12 card text-center">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">レジュメやレポートに<br>
                    もう時間を
                    奪われることはありません</h3>

            </div>
        </div>
    </div>

    <div class="col-md-12 text-center">
        <img
        src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d"
        srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fd141f30070ab4d1084c0d1da2df3630d"
        className="image"
      style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
            width="750px" height="750px" alt="">
    </div>

    <div class="col-md-12">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">ワンクリック簡単投稿</h3>
<p>
    リアルタイムの医療情報や治療、症例から得られた知見を簡単に記録・公開できます。

</p>
            </div>
        </div>
    </div>


  <div class="" style="width: 100%; display: flex; flex-wrap: wrap;">

      {{-- section1 --}}
      <div class="col-md-4 ">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0 width:33%;">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F242aa84ac1ec4dbca041974db1c5a9b4"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">キャリアアップ
                </h3>
                <p>
                    あなたの経歴や経験が一目でわかる！
                    参加した学会や勉強会で得た知見、論文を掲載することであなたのキャリアアップのチャンスになります。

                </p>
            </div>
        </div>
    </div>


    {{-- section2 --}}
    <div class="col-md-4 ">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0 width:33%;">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F5e680649b4824715abd4789225ecc987"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">院内教育
                </h3>
                <p>
                    もう何度も同じことを言う必要はありません。
一回投稿すれば後は
投稿した記事のリンクを送るだけ。
今すぐに　院内教育を
開始できます。

                </p>
            </div>
        </div>
    </div>


    {{-- section3 --}}
    <div class="col-md-4 ">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0 width:33%;">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F7c3e0fbb454c4637a938e86ee9f8f449"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">つかむチャンス
                </h3>
                <p>
                    論文や勉強会の成果を共有してください。
あなたが更新をするたびに、
あなたの権威性を高め、学会や勉強会の認知や集客のチャンスを引き出します。

                </p>
            </div>
        </div>
    </div>
  </div>


  <div class="col-md-12">
    <div class="mt-3">
        <div class="card-body" style="margin:70px 0 40px; 0">

            <h3 style="color:#6B778C; font-size: 34px;" class="text-center">見つける、つながる</h3>
<p>
    優れた治療家、セラピストを見つけ、彼らの仕事や成果を最新の状態で把握することができます。

</p>
        </div>
    </div>
</div>

  {{-- section1 --}}
  <div class="row justify-content-left" style="margin-top:70px;">
    <div class="col-md-6 text-left">
            <div class="card-body" style="margin:70px 0 40px; 0">


                <h3 style="color:#6B778C; font-size: 34px;" class="text-left">臨床の最新情報を取得</h3>
                <div class="card-body text-left" style="margin:70px 0 40px; 0">
                    医療従事者からなるPTのネットワークを活用して、優れた治療家、セラピストを見つけてフォローし、最新のニュースや知見、研究の情報を入手し、講演や学会のチャンスを贔屓寄せたり、臨床に生かすことができます。

                </div>
                   <a href="{{ route('register') }}"
                            style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                            Register</a>

            </div>
    </div>

            <div class="col-md-6 text-right">
                <img
                src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55"
                srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2Fc1f88dc57e7c4535a967ea2b0acc7c55"
                className="image"
              style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
                    width="750px" height="750px" alt="">
            </div>
    </div>





{{-- section2 --}}


<div class="row justify-content-left" style="margin-top:70px;">
    <div class="col-md-6 text-left">
        <img
        src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3"
        srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F313c8a384b9d4a42be452c6376d09ea3"
        className="image"
      style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
            width="750px" height="750px" alt="">
    </div>
    <div class="col-md-6 text-left">
            <div class="card-body" style="margin:70px 0 40px; 0">


                <h3 style="color:#6B778C; font-size: 34px;" class="text-left">あなたのアップデートを共有する</h3>
                <div class="card-body" style="margin:70px 0 40px; 0">
                    PTであなたの経験や実績、知見を伝えれば、他の人に差をつけることができ、他では見つけられないような講演、学会、キャリア、知見の機会を引き寄せることができます。
                </div>
                <a href="{{ route('register') }}"
                        class="text-left" style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                        Register</a>

            </div>
    </div>


    </div>

{{-- section3 --}}
<div class="row justify-content-left" style="margin-top:70px;">

    <div class="col-md-6 text-left">
            <div class="card-body" style="margin:70px 0 40px; 0">


                <h3 style="color:#6B778C; font-size: 34px;" class="text-left">最高の人とのコラボレーション</h3>
                <div class="card-body" style="margin:70px 0 40px; 0">
                    PT には医療従事者の論文、臨床試験、学会などの科学的業績が掲載されているので、あなたの研究や勉強会を推進してくれる仲間を簡単に見つけることができます。
                </div>
                <a href="{{ route('register') }}"
                class="text-left" style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                Register</a>

            </div>
    </div>
    <div class="col-md-6 text-left">
        <img
        src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a"
        srcSet="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F0e67dc4482f54479bff550976dea5a8a"
        className="image"
      style="margin-top:20px; border:none;" class="text-right img-thumbnail mb-3"
            width="750px" height="750px" alt="">
    </div>


    </div>




    <div class="col-md-12">
        <div class="mt-3">
            <div class="card-body" style="margin:70px 0 40px; 0">

                <h3 style="color:#6B778C; font-size: 34px;" class="text-center">今すぐ始めよう。<br>PTにご登録ください</h3>
                <a href="{{ route('register') }}"
                class="text-left" style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;">
                Register</a>
            </div>
        </div>
    </div>





    {{-- REquest demo --}}
    {{-- <section class="bg-light page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                    <h3 style="color:#6B778C; font-size: 34px;" class="text-left" class="section-subheading text-muted">
                        You can write something here.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div id="formWrapper">
                        <form method="post" name="myForm" target="dummyIframe" id="contactForm"
                            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd03PnCXtvzMLGQ2kAvElPxnM0YObgXNNxgLwhaf9Yuq0uoJw/formResponse">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="entry.396499815" class="form-control" id="name" type="text"
                                            placeholder="Your Name *" required="required"
                                            data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input name="entry.1961516594" class="form-control" id="email" type="email"
                                            placeholder="Your Email *" required="required"
                                            data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="entry.1867448900" class="form-control" id="message"
                                            placeholder="Your Message *" required="required"
                                            data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <!-- <button style="background-color:#2E77FD;color:white; border-radius: 8px;    padding: 5px 16px;    border: none; font-weight: bold;    margin-bottom: 40px;" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                                                Message</button> -->
                                    <input class="btn btn-primary" type="button" value="送信" onclick="sendGform()">
                                </div>

                            </div>
                        </form>
                        <iframe name="dummyIframe" style="display:none;"></iframe>
                    </div>

                    <div id="thxMessage" style="display:none; text-align: center;">お問い合わせありがとうございました。</div>


                </div>
    </section> --}}












    </div>
    </div>
    </div>
    </div>
</body>

</html>
