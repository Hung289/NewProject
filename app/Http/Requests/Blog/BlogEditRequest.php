<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogEditRequest extends FormRequest
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
            'content'=>'required|max:5000',
            'title'=>'required|max:255',
            'category_blog_id'=>'required',
            'user_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên blog không được để trống',
            'content.required'=>'Content không được bỏ trống',
            'title.required'=>'Title không được bỏ trống',
            'category_blog_id.required'=>'Danh muc của blog không được bỏ trống',
            'user_id.required'=>'Người đăng bài không được bỏ trống',
            'title.max'=>'Title không được quá 255 ký tự',
            'content.max'=>'Content không được quá 5000 ký tự'
        ];
    }
}
