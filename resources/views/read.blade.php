<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script type="text/javascript">
        //削除ページ遷移処理
        function transition(){
            if(!window.confirm('本当に削除しますか？')){
                window.alert('キャンセルされました'); 
                return false;
            }
           document.deleteform.submit();
        }
        </script> 
    @extends('layouts.layouts')
    @section('content')
    @isset($header_datas)
    @foreach($header_datas as $header)
    <br><input type="text" style="text-align:center;font-size:20pt;border:0;background-color:transparent;color:#660000;" readonly value={{ $header -> title }} name="title" id="title"><br><br>
    @if($header -> picture)    
    <img src="/storage/{{ $header -> picture }}" alt="picture" title="picture" width="500"><br>
    @endif
    材料(<input type="text" style="text-align:center;font-size:15pt;border:0;background-color:transparent;color:#660000;" readonly value={{ $header -> amount }} name="amount" id="amount" size="3+">)人分<br>
    <textarea  name="ingredients" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="ingredients" rows="10" cols="70" wrap="hard">{{ $header -> ingredientss }}</textarea><br>
        <textarea  name="recipe1" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe1" rows="3" cols="70" wrap="hard">{{ $recipe1 }}</textarea><br>
        @if($recipe2 != null)
        <textarea  name="recipe2" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe2" rows="3" cols="70" wrap="hard">{{ $recipe2 }}</textarea><br>
        @endif
        @if($recipe3 != null)
        <textarea  name="recipe3" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe3" rows="3" cols="70" wrap="hard">{{ $recipe3 }}</textarea><br>
        @endif
        @if($recipe4 != null)
        <textarea  name="recipe4" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe4" rows="3" cols="70" wrap="hard">{{ $recipe4 }}</textarea><br>
        @endif
        @if($recipe5 != null)
        <textarea  name="recipe5" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe5" rows="3" cols="70" wrap="hard">{{ $recipe5 }}</textarea><br>
        @endif
        @if($recipe6 != null)
        <textarea  name="recipe6" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe6" rows="3" cols="70" wrap="hard">{{ $recipe6 }}</textarea><br>
        @endif
        @if($recipe7 != null)
        <textarea  name="recipe7" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe7" rows="3" cols="70" wrap="hard">{{ $recipe7 }}</textarea><br>
        @endif
        @if($recipe8 != null)
        <textarea  name="recipe8" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe8" rows="3" cols="70" wrap="hard">{{ $recipe8 }}</textarea><br>
        @endif
        @if($recipe9 != null)
        <textarea  name="recipe9" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe9" rows="3" cols="70" wrap="hard">{{ $recipe9 }}</textarea><br>
        @endif
        @if($recipe10 != null)
        <textarea  name="recipe10" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="recipe10" rows="3" cols="70" wrap="hard">{{ $recipe10 }}</textarea><br>
        @endif
        @if($header -> memo)
        その他メモ<br><textarea name="memo" style="font-size:13pt;border:0;background-color:transparent;color:#660000;" readonly id="memo" rows="5" cols="70" wrap="hard">{{ $header -> memo }}</textarea><br>
        @endif
        <br>
        <form id="edit_form" name="form2" method ="post" action="{{ route('edit',$header ->id) }}">
        {{ csrf_field() }}
        <input type ="hidden" name ="id" value="{{ $header -> id }}">        
        <input class="btn" type="submit" value="編集">
        </form>   
        <br>             
        <form id="delete_form" name="form1" method ="post" action="{{ route('delete') }}">
        {{ csrf_field() }}
        <input type ="hidden" name ="id" value="{{ $header -> id }}">
        <input class="btn" type="submit" value="削除" onclick="Javascript:transition();return false;">
        </form>
    @endforeach
    @endisset
    @endsection
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        </div>
    </body>
</html>
