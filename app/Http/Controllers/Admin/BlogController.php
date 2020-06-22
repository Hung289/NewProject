<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\CategoryBlog;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = Blog::all();
        $blogs = Blog::orderBy('id','DESC')->paginate(5);
        return view('admin.Blog.list',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = User::all();
        $CategoryBlog = CategoryBlog::all();
        return view('admin.Blog.add',['CategoryBlog'=>$CategoryBlog,'admins'=>$admins]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Blog $blog)
    {
        $model = $blog->add();
        if($model){
            return redirect()->route('blog.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('errors','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $admins = User::all();
        $CategoryBlog = CategoryBlog::all();
        return view('admin.Blog.edit',['CategoryBlog'=>$CategoryBlog,'blog'=>$blog,'admins'=>$admins]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $model = $blog->updateEdit();
        return redirect()->route('blog.index')->with('success','Cập nhật thành công blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success','Xóa thành công');
    }

    public function search(Request $request){
        $blogs = Blog::where('name','like','%'.$request->key.'%')
                    ->orWhere('title','like','%'.$request->key.'%')
                    ->paginate(5);
        return view('admin.Blog.list',['blogs'=>$blogs]);
    }
}
