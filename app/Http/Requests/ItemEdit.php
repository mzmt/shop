<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemEdit extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'price' => 'required|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            # name
            'name.required' => '商品名を入力してください',
            'name.max' => '文字数は255文字以下で入力してください',
            # price
            'price.required' => '金額を入力してください',
            # description
            'description.required' => '商品説明を入力してください',
            'description.max' => '商品概要は255文字以下で入力してください',
        ];
    }
}
