<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }  

    public function rules()
    {
        return [
        'name'=>'required|string|max:99',
        'abbr'=>'required|string|max:10',
        //'active'=>'required|in:0,1',
        'direction'=>'required|in:rtl,ltr',
        ];
    }
    public function messages()
    {
        return [
        'required'=>'هذا الحقل مطلوب ',
        'string'=>'الحقل  يجب ان يكون احرف ',
        'max'=>'الحقل يجب  ان يكون اصغر من ذلك',
        'in'=>'قيمه غير صحيحه',
         ];
    }
}
