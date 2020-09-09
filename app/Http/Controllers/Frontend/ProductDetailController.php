<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function detail(Request $req, $slug,$id)
    {
        if($id){
            $product = Product::find($id);
        }
        $viewData = [
            'product'=>$product
        ];
       return view('frontend.products.detail',$viewData);
    }
}
