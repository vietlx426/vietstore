<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestProduct;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }
    public function create(){
        $cate = Category::all();
        $attributes = Attribute::all();
        $viewData = [
            'cate' => $cate,
            'attributes'=>$attributes
        ];
        return view('admin.product.create',$viewData);
    }
    public function store(Request $req){
        $data = $req->except('_token');
        $data['pro_slug'] = str_slug($req->pro_name);
        $data['created_at'] = Carbon::now();
        if($req->hasFile('pro_avatar')) {

            $file = $req->file('pro_avatar');
            $fileName = $file->getClientOriginalName();
            $data['pro_avatar']= $fileName;
            $folder_upload =  public_path() . '/uploads'.'/'.$req->pro_name;
            $avatar = $req->pro_avatar;
            $avatar->move($folder_upload, $avatar->getClientOriginalName());
        }

        $id = Product::insertGetId($data);
        if($id){
            $this->pro_attribute($req->attribute,$id);
        }
        return redirect()->back();
    }
    public function edit($id){
        $product = Product::find($id);
        $cate = Category::all();
        $attributes = Attribute::all();
        $viewData = [
            'cate' => $cate,
            'product'=>$product,
            'attributes'=>$attributes
        ];
        return view('admin.product.edit',$viewData);
    }
    public function update(Request $req,$id){
        $product = Product::find($id);
        $data = $req->except('_token','pro_avatar','attribute');
        $data['pro_slug'] = str_slug($req->pro_name);
        $data['updated_at'] = Carbon::now();
        if($req->hasFile('pro_avatar')) {

            $file = $req->file('pro_avatar');
            $fileName = $file->getClientOriginalName();
            $data['pro_avatar']= $fileName;
            $folder_upload =  public_path() . '/uploads'.'/'.$req->pro_name;
            $avatar = $req->pro_avatar;
            $avatar->move($folder_upload, $avatar->getClientOriginalName());
        }



        $product->update($data);
        if($product){
            $this->pro_attribute($req->attribute,$id);
        }
        return redirect()->back();
    }
    public function active($id){
        $active = Product::find($id);
        $active->pro_active = !$active->pro_active;
        $active->save();
        return redirect()->back();
    }public function hot($id){
        $hot = Product::find($id);
        $hot->pro_hot = !$hot->pro_hot;
        $hot->save();
        return redirect()->back();
    }
    public  function destroy($id){
        $product = Product::find($id);
        if($product) $product->delete();
        return redirect()->back();
    }
    protected function pro_attribute($attributes, $idProduct)
    {
        $oldAttributes = ProductAttribute::where('pa_product_id',$idProduct);
        if($oldAttributes) $oldAttributes->delete();
        foreach ($attributes as $attribute)
        if(!empty($attribute))
        {
            $pro_attribute = new ProductAttribute();
            $pro_attribute['pa_product_id'] = $idProduct;
            $pro_attribute['pa_attribute_id'] = $attribute;
            $pro_attribute->save();
        }
    }
}
