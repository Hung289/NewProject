<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryBlog\CategoryBlogAddRequest;
use App\Http\Requests\CategoryBlog\CategoryBlogEditRequest;

class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoryBlog = CategoryBlog::orderBy('id', 'DESC')->paginate(5);
        return view('admin.CategoryBlog.list', ['CategoryBlog' => $CategoryBlog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CategoryBlog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryBlogAddRequest $request, CategoryBlog $categoryBlog)
    {
        // dd($categoryBlog);
        $model = $categoryBlog->add();
        // dd($model);
        if ($model) {
            return redirect()->route('admin.categoryBlog.create')->with('success', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->back()->with('errors', 'Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryBlog $categoryBlog)
    {
        return view('admin.CategoryBlog.view', ['categoryBlog' => $categoryBlog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryBlog $categoryBlog)
    {
        // dd($categoryBlog);
        return view('admin.CategoryBlog.edit', ['categoryBlog' => $categoryBlog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryBlogEditRequest $request, CategoryBlog $categoryBlog)
    {
        $model = $categoryBlog->updateEdit();
        return redirect()->route('admin.categoryBlog.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryBlog  $categoryBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryBlog $categoryBlog)
    {
        if ($categoryBlog && $categoryBlog->blog->count() == 0) {
            $categoryBlog->delete() ;
            return response(['success'=>true]);     
        } else {
            return response(['success'=>false]);
        }
    }

    public function search(Request $request)
    {
        $CategoryBlog = CategoryBlog::where('name', 'like', '%' . $request->key . '%')->paginate(5);
        return view('admin.CategoryBlog.list', ['CategoryBlog' => $CategoryBlog]);
    }
}
