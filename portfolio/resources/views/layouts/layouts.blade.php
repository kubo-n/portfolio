<!DOCTYPE HTML>
<html lang="ja">
<head>
    <style>

    </style>
    <meta charset="UTF-8">
    <title>MY RECIPE</title>
</head>
<body background="{{ asset('img/back.gif') }}" text="#660000">
<div align="center">
        <img src="{{ asset('img/title.jpg') }}" width="700" alt="title">
        <br><br>
        <hr width="700">
        <a href="{{ route('top') }}">トップ</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
　      <a href="{{ route('list') }}">記事一覧</a><br>
        <hr width="700"><br>
        @yield('content')
        <hr width="700">
</div>
</body>
</html>