<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    public function index(){
        $attributes = Attribute::with('category:id,c_name')->orderByDesc('id')->get();
        return view('admin.attribute.index',compact('attributes'));
    }
    public function create(){
        return view('admin.attribute.create');
    }
    public function store(Request $req){
        $data = $req->except('_token');
        $data['atb_slug'] = str_slug($req->atb_name);
        $data['created_at'] = Carbon::now();
        $id = Attribute::insertGetId($data);
        return redirect()->route('admin.attribute.index');
    }
    public function edit($id){
        $attribute = Attribute::find($id);
        return view('admin.attribute.edit',compact('attribute'));
    }
    public function update(Request $req, $id){
        $attribute = Attribute::find($id);
        $data = $req->except('_token');
        $data['atb_slug'] = str_slug($req->atb_slug);
        $data['updated_at'] = Carbon::now();
        $attribute->update($data);
        return redirect()->back();
    }
    public function destroy($id){
        $attribute = Attribute::find($id);
        if($attribute) $attribute->delete();
        return redirect()->back();
    }
}
