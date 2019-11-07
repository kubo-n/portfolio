<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @extends('layouts.layouts')
    @section('content')
    @if(count($titles) === 0)
    <h5>まだ投稿はありません。</h5>
    @endif
    @isset ($titles)
    @foreach($titles as $title)
        <a href="{{url('portfolio/list' ,$title->id)}}">{{ $title -> title }}</a><br>    
    @endforeach
    @endisset
    <br><a href="{{ route('input') }}">【新規作成】</a>
    @endsection
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        </div>
    </body>
</html>
