<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Inputpost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //入力値のバリデーション
            'title' => 'required',  
            'amount' => 'required|numeric',               
            'ingredients' => 'required',          
            'recipe1' => 'required',   
            'image_file' => 'image' ,          
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください。',
            'amount.required' => '分量を入力してください。',
            'amount.numeric' => '分量は半角数字で入力してください。',
            'ingredients.required' => '材料を入力してください。',
            'recipe1.required' => 'レシピ①を入力してください。',
            'image_file.image' => '画像ファイルを指定してください。',
        ];
        
    }
}
