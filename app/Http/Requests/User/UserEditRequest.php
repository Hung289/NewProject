<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name'=>'required',
            'avatar'=>'mimes:jpeg,png,gif,jpg',
            'email'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên không được để trống',
            'avatar.mimes'=>'Ảnh không đúng định dạng',
            'email.required'=>'Email không được để trống',
            'password.required'=>'Password không được để trống'
        ];
    }
}