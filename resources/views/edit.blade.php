<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
        .error { 
            color:#FF0000; 
            background:#FFEBE8; 
            }

        </style>
    @extends('layouts.layouts')
    @section('content')
    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        @foreach($header_datas as $header)
        <input type ="hidden" name ="id" value="{{ $header -> id }}">
        <p class="txt">
        <font size="1">※タイトル、分量(何人分)、材料、レシピは必須項目です。</font><br>          
        <b>タイトル</b><br>
        <textarea value="" name="title" id="title" rows="1" cols="70" wrap="hard">{{ $header -> title }}{{ old('title') }}</textarea>
        @if($errors)
        <br><span class="error">{{$errors->first('title')}}</span>
        @endif
        <br><br>
        <b>材料</b>(<textarea value="" name="amount" id="amount" rows="1" cols="4" wrap="hard">{{ $header -> amount }}{{ old('amount') }}</textarea>)人分
        @if($errors)
        <br><span class="error">{{$errors->first('amount')}}</span><br>
        @endif
        <textarea value="" name="ingredients" id="ingredients" rows="5" cols="70" wrap="hard">{{ $header -> ingredientss }}{{ old('ingredients') }}</textarea><br>
        @if($errors)
        <span class="error">{{$errors->first('ingredients')}}</span><br>
        @endif
        @endforeach
        <b>レシピ①</b><br>
        <textarea value="" name="recipe1" id="recipe1" rows="3" cols="70" wrap="hard">{{ $recipe1 }}{{ old('recipe1') }}</textarea>
        @if($errors)
        <br><span class="error">{{$errors->first('recipe1')}}</span><br>
        @endif
        <b>レシピ②</b><br>
        <textarea value="" name="recipe2" id="recipe2" rows="3" cols="70" wrap="hard">{{ $recipe2 }}{{ old('recipe2') }}</textarea><br>
        <b>レシピ③</b><br>
        <textarea value="" name="recipe3" id="recipe3" rows="3" cols="70" wrap="hard">{{ $recipe3 }}{{ old('recipe3') }}</textarea><br>
        <b>レシピ④</b><br>
        <textarea value="" name="recipe4" id="recipe4" rows="3" cols="70" wrap="hard">{{ $recipe4 }}{{ old('recipe4') }}</textarea><br>
        <b>レシピ⑤</b><br>
        <textarea value="" name="recipe5" id="recipe5" rows="3" cols="70" wrap="hard">{{ $recipe5 }}{{ old('recipe5') }}</textarea><br>
        <b>レシピ⑥</b><br>
        <textarea value="" name="recipe6" id="recipe6" rows="3" cols="70" wrap="hard">{{ $recipe6 }}{{ old('recipe6') }}</textarea><br>
        <b>レシピ⑦</b><br>
        <textarea value="" name="recipe7" id="recipe7" rows="3" cols="70" wrap="hard">{{ $recipe7 }}{{ old('recipe7') }}</textarea><br>
        <b>レシピ⑧</b><br>
        <textarea value="" name="recipe8" id="recipe8" rows="3" cols="70" wrap="hard">{{ $recipe8 }}{{ old('recipe8') }}</textarea><br>
        <b>レシピ⑨</b><br>
        <textarea value="" name="recipe9" id="recipe9" rows="3" cols="70" wrap="hard">{{ $recipe9 }}{{ old('recipe9') }}</textarea><br>
        <b>レシピ⑩</b><br>
        <textarea value="" name="recipe10" id="recipe10" rows="3" cols="70" wrap="hard">{{ $recipe10 }}{{ old('recipe10') }}</textarea><br>
        @foreach($header_datas as $header)
        <b>その他メモ</b><br>
        <textarea value="" name="memo" id="memo" rows="5" cols="70" wrap="hard">{{ $header -> memo }}{{ old('memo') }}</textarea><br>
        @endforeach
        <b>画像登録</b><br>
        <input type="file" name="image_file"></p>
        @if($errors)
        <span class="error">{{$errors->first('image_file')}}</span><br>
        @endif
        <br>
        <input type="submit" value="更新">
        <p class="txt">
    </form>
    @endsection
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        </div>
    </body>
</html>
