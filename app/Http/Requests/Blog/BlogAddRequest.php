<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogAddRequest extends FormRequest
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
        // day la rules nay, gio custom rieng cho 1 rules =))//la sao
        // nhu kieu regex ay,viet nhu nay a
        return [
            'name'=>'required | unique:blogs',
            'content'=>'required|max:5000',
            'title'=>'required|max:255',
            'category_blog_id'=>'required',
            'user_id'=>'required',
            'files'=>'required '
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên blog không được để trống',
            'name.unique'=>'Tên Blog đã tồn tại',
            'content.required'=>'Content không được bỏ trống',
            'content.max'=>'Content không được quá 5000 ký tự',
            'title.required'=>'Title không được bỏ trống',
            'title.max'=>'Title không được quá 255 ký tự',
            'category_blog_id.required'=>'Danh muc của blog không được bỏ trống',
            'user_id.required'=>'Người đăng bài không được bỏ trống',
            'files.required'=>'Ảnh không được bỏ trống'
        ];        
    }
}
