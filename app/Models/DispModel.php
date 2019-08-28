<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DispModel extends Model
{
    static function getTitleData(){
        //titlleデータ取得
        $titles = DB::table('recipe_header')->select('title','id')->get();
        return $titles;
    }

    static function insertData($input, $file_name){
         //入力データ登録
        $id = DB::table('recipe_header')->insertGetId(
            ['title' => $input['title'], 'amount' => $input['amount'], 'ingredientss' => $input['ingredients'],
            'memo' => $input['memo'],  'picture' => $file_name, 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()]
        );

        DB::table('recipe_detail')->insert([
            ['header_id' => $id, 'number' => '1', 'step' => $input['recipe1'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '2', 'step' => $input['recipe2'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '3', 'step' => $input['recipe3'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '4', 'step' => $input['recipe4'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '5', 'step' => $input['recipe5'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '6', 'step' => $input['recipe6'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '7', 'step' => $input['recipe7'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '8', 'step' => $input['recipe8'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '9', 'step' => $input['recipe9'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()],
            ['header_id' => $id, 'number' => '10', 'step' => $input['recipe10'], 'inserted_date' => Carbon::now(),'updated_date' => Carbon::now()]
        ]);

        return $id;
    }

    static function getHeaderData($id){
        //全データ取得（ヘッダー情報）
        $header_datas = DB::table('recipe_header')->where('id' ,$id)-> get();
        return $header_datas;
    }

    static function getDetailData($id){
        //全データ取得（ディテール情報）
        $detail_datas = DB::table('recipe_detail')->where('header_id' ,$id)-> get();
        return $detail_datas;
    }

    static function deleteData($id){
        //データ削除
        DB::table('recipe_header')->where('id',$id)->delete();
        DB::table('recipe_detail')->where('header_id',$id)->delete();
        return $id;
    }

    static function updateData($input, $file_name){

        $id = $input['id'];
        //入力データ更新
       DB::table('recipe_header')
       ->where('id', $id)
       ->update([
           'title' => $input['title'], 'amount' => $input['amount'], 'ingredientss' => $input['ingredients'],
           'memo' => $input['memo'],  'picture' => $file_name,'updated_date' => Carbon::now()
           ]);

       DB::table('recipe_detail')
       ->where('header_id', $id)
       ->where('number','1')
       ->update([
           'step' => $input['recipe1'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','2')
       ->update([
           'step' => $input['recipe2'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','3')
       ->update([
           'step' => $input['recipe3'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','4')
       ->update([
           'step' => $input['recipe4'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','5')
       ->update([
           'step' => $input['recipe5'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','6')
       ->update([
           'step' => $input['recipe6'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','7')
       ->update([
           'step' => $input['recipe7'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','8')
       ->update([
           'step' => $input['recipe8'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','9')
       ->update([
           'step' => $input['recipe9'], 'updated_date' => Carbon::now()
       ]);
       DB::table('recipe_detail')
       ->where('header_id', $input['id'])
       ->where('number','10')
       ->update([
           'step' => $input['recipe10'], 'updated_date' => Carbon::now()
       ]);

       return $id;
   }

}
