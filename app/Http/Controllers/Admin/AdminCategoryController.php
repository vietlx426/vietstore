<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminRequestCategory;
use App\Models\Category;
use Carbon\Carbon;

class AdminCategoryController extends AdminController
{
    public function  index(){
        $cate = Category::all();
        $viewData = [
            'cate'=>$cate
        ];
        return view('admin.category.category_index',$viewData);
    }
    public function create(){
        return view('admin.category.category_create');
    }
    public function store(AdminRequestCategory $req){
        $cate = new Category;
        $cate['c_name']= $req->c_name;
        $cate['c_slug'] = str_slug($req->c_name);
        $cate['created_at'] = Carbon::now();
        $cate->save();
        return redirect()->back();

    }
    public function edit($id){
        $cate = Category::find($id);
        return view('admin.category.category_edit',compact('cate'));
    }
    public function update(AdminRequestCategory $req,$id){
        $cate = Category::find($id);
        $cate['c_name']= $req->c_name;
        $cate['c_slug'] = str_slug($req->c_name);
        $cate['created_at'] = Carbon::now();
        $cate->save();
        return redirect()->back();
    }
    public function hot($id){
        $cate = Category::find($id);
        $cate['c_hot'] = !$cate->c_hot;
        $cate->save();
        return redirect()->back();
    }public function status($id){
        $cate = Category::find($id);
        $cate['c_status'] = !$cate->c_status;
        $cate->save();
        return redirect()->back();
    }
}
