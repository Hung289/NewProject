<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerEditRequest extends FormRequest
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
            'content'=>'required|max:30',
            'image'=>' mimes:png,jpeg,gif',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên banner không được bỏ trống',
            'content.required'=>'Nội dung banner không được bỏ trống',
            'content.max'=>"Content không quá 30 kí tự",
            'image.mimes'=>'Ảnh banner không đúng định dạng'
        ];
    }
}
