<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(){
        //newest products
        $pro = Product::where('pro_active',1)
            ->orderByDesc('id')->limit(6)
            ->select('id','pro_name','pro_price','pro_sale','pro_avatar','pro_slug')
            ->get();
        //hot products
        $productsHot = Product::where(['pro_active' => 1,'pro_hot'=>1])
            ->orderByDesc('id')->limit(6)
            ->select('id','pro_name','pro_price','pro_sale','pro_avatar','pro_slug')
            ->get();
        $viewData = [
            'pro'=>$pro,
            'productsHot'=>$productsHot
        ];
        return view('frontend.home.index',$viewData);
    }
}
