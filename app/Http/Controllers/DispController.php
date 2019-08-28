<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispModel;
use Validator;
use App\Http\Requests\InputPost;

class DispController extends Controller
{
    public function index(){
        //title取得
        $titles = DispModel::getTitleData();
        //listビューへ
        return view('list', compact('titles'));
    }

    public function input(){
        //inputビューへ
        return view('input');
    }

    public function insert(InputPost $request){

        $input = $request->all();

        //画像アップロード
        if($request->image_file){
            $originalImg = $request->image_file;
            $filePath = $originalImg->store('public');
            $file_name = str_replace('public/', '', $filePath);    
        }else{
            $file_name = null;
        }

        //登録処理
        $result_id = DispModel::insertData($input, $file_name);

        //登録完了画面へ
        return view('complete', compact('result_id'));
    }

    public function read($id){
        //idを受け取り、ヘッダー情報取得
        $header_datas = DispModel::getHeaderData($id);
        //idを受け取り、ディテール情報取得
        $detail_datas = DispModel::getDetailData($id);

        $recipe1 = $detail_datas['0']->step;
        $recipe2 = $detail_datas['1']->step;
        $recipe3 = $detail_datas['2']->step;
        $recipe4 = $detail_datas['3']->step;
        $recipe5 = $detail_datas['4']->step;
        $recipe6 = $detail_datas['5']->step;
        $recipe7 = $detail_datas['6']->step;
        $recipe8 = $detail_datas['7']->step;
        $recipe9 = $detail_datas['8']->step;
        $recipe10 = $detail_datas['9']->step;

        //本文ビューへ
        return view('read', compact('header_datas', 'recipe1', 'recipe2', 'recipe3', 'recipe4', 'recipe5', 'recipe6', 'recipe7', 'recipe8', 'recipe9', 'recipe10'));
    }

    public function delete(Request $request){

        $input = $request->all();
        $id = $input['id'];
        //idを受け取り、各情報を削除
        DispModel::deleteData($id);
        //削除完了ビューへ
        return view('delete');
        
    }
    public function edit(Request $request, $id){

        $input = $request->all();

        //idを受け取り、ヘッダー情報取得
        $header_datas = DispModel::getHeaderData($id);
        //idを受け取り、ディテール情報取得
        $detail_datas = DispModel::getDetailData($id);

        $recipe1 = $detail_datas['0']->step;
        $recipe2 = $detail_datas['1']->step;
        $recipe3 = $detail_datas['2']->step;
        $recipe4 = $detail_datas['3']->step;
        $recipe5 = $detail_datas['4']->step;
        $recipe6 = $detail_datas['5']->step;
        $recipe7 = $detail_datas['6']->step;
        $recipe8 = $detail_datas['7']->step;
        $recipe9 = $detail_datas['8']->step;
        $recipe10 = $detail_datas['9']->step;

        if ($request->isMethod('post')) {
            //編集画面へ
            return view('edit', compact('header_datas', 'recipe1', 'recipe2', 'recipe3', 'recipe4', 'recipe5', 'recipe6', 'recipe7', 'recipe8', 'recipe9', 'recipe10'));
        }else{
            //バリデーションでgetの場合、編集画面2へ
            return view('edit2', compact('header_datas', 'recipe1', 'recipe2', 'recipe3', 'recipe4', 'recipe5', 'recipe6', 'recipe7', 'recipe8', 'recipe9', 'recipe10'));
        }
    }

    public function update(InputPost $request){

        $input = $request->all();
        //画像アップロード
        if($request->image_file){
            $originalImg = $request->image_file;
            $filePath = $originalImg->store('public');
            $file_name = str_replace('public/', '', $filePath);    
        }else{
            $file_name = null;
        }

        //更新処理
        $result_id = DispModel::updateData($input, $file_name);

        //更新完了画面へ
        return view('update', compact('result_id'));
    }
}
