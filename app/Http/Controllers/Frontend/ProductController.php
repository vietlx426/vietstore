<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends FrontendController
{
    public function index(){
        $products = Product::where('pro_active',1)
            ->orderByDesc('id')
            ->select('id','pro_name','pro_slug','pro_sale','pro_avatar','pro_price')
            ->get();
        $viewData = [
            'products'=>$products
        ];
        return view('frontend.products.index',$viewData);
    }
    public  function detail($id){
        return view('frontend.products.detial');
    }
}
