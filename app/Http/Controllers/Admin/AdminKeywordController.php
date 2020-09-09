<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestKeyword;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Keyword;

class AdminKeywordController extends Controller
{
    public function index(){
        $key = Keyword::all();
        return view('admin.keyword.keyword_index',compact('key'));
    }
    public function create(){
        return view('admin.keyword.keyword_create');
    }
    public function store(AdminRequestKeyword $req){
        $data = $req->except('_token');
        $data['k_name'] = $req->k_name;
        $data['k_slug'] = str_slug($req->k_name);
        $data['k_desc'] = $req->k_desc;
        $data['created_at'] = Carbon::now();
        $id = Keyword::insertGetId($data);
        return redirect()->route('admin.keyword.index');


    }
    public function hot($id){
        $key = Keyword::find($id);
        $key['k_hot'] = ! $key->k_hot;
        $key->save();
        return redirect()->back();
    }
    public function edit($id){
        $key = Keyword::find($id);
        return view('admin.keyword.keyword_edit', compact('key'));
    }
    public function update(AdminRequestKeyword  $req, $id){
        $key = Keyword::find($id);
        $key->k_name = $req->k_name;
        $key->k_slug = str_slug($req->k_name);
        $key->k_desc = $req->k_desc;
        $key->save();
        return redirect()->back();
    }
    public  function destroy($id){
        $key = Keyword::find($id);
        if($key) $key->delete();
        return redirect()->back();
    }
}
