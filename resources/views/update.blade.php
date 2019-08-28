<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @extends('layouts.layouts')
    @section('content')
    @isset($result_id)
    <h5>更新しました。レシピID：{{ $result_id }}番</h5>
    @endisset
    @endsection
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        </div>
    </body>
</html>
