<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Cart;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('frontend.cart.index');
    }
    public function AddCart(Request $req, $id){
        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        return view('frontend.cart.cart');
    }
    public function UpdateCart(Request $req, $id){

        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        return view('frontend.cart.list-cart');
    }
    public function UpdateCartTest(Request $req, $id,$quantity){
        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart,$quantity);
            $newCart->UpdateCartTest($product,$id, $quantity);
            $req->session()->put('Cart',$newCart);
        }
        return view('list-cart');
    }
    public function UpdateCartDownAjax(Request $req, $id){
        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateCartDown($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        return view('frontend.cart.list-cart');
    }
    public function DeleteItemCart(Request $req, $id){

        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItem($id);
        if(Count ($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else{
            $req->session()->forget('Cart');
        }

        return view('cart_header');
    }
    public function ViewListCart(){
        return view('cart');
    }
    public function DeleteItemListCart(Request $req,$id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItem($id);
        if(Count ($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else{
            $req->session()->forget('Cart');
        }

        return view('frontend.cart.list-cart');
    }
    public function destroy(Request $req){
        $req->session()->forget('Cart');
        return redirect()->back();
    }
    public function payment(){
        return view('frontend.cart.payment');
    }
    public function postPayment(Request $req){
        dd(Cart::total());
        $data = $req->except('_token');
        if(isset(Auth::user()->id)){
            $data['tst_user_id'] = Auth::user()->id;
        }
        $data['tst_total_payment'] = Cart::total();
        $data['created_at'] = Carbon::now();
        $transactionID = Transaction::insertGetId($data);
        if($transactionID){
            foreach (Session::get("Cart")->products as $item){
                $order = new Order();
                $order['od_transaction_id'] =$transactionID;
                $order['od_product_id'] =$item['productInfo']->id;
                $order['od_sale'] =$item['sale'];
                $order['od_qty'] =$item['quantity'];
                $order['od_price'] =$item['productInfo']->pro_price * ((100-$item['sale'])/100);
                $order->save();
            }
        }
        Cart::destroy();
        return redirect()->to('/');
    }
}
