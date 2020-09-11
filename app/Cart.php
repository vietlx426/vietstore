<?php

namespace App;

use Session;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function AddCart($product, $id){
        $newProduct = ['quantity' => 0, 'price' => $product->pro_price,'sale'=>$product->pro_sale,'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        // dd($newProduct);
        $newProduct['quantity']++;
        $newProduct['price'] =  $newProduct['quantity'] * ($product->pro_price* ((100 - $newProduct['sale'])/100));
        $this->products[$id] = $newProduct;
        $this->totalPrice += ($product->pro_price* ((100 - $newProduct['sale'])/100));
        $this->totalQuantity++;

    }
    public function DeleteItem($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }


    public function UpdateCartDown($product, $id){
        $newProduct = ['quantity' => 0, 'price' => $product->pro_price,'sale'=>$product->pro_sale,'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        if($newProduct['quantity'] == 1)
        {
            $this->DeleteItem($id);
        }
        else{
            $newProduct['quantity'] = $newProduct['quantity']-1;
            $newProduct['price'] =  $newProduct['quantity'] * ($product->pro_price* ((100 - $newProduct['sale'])/100));
            $this->products[$id] = $newProduct;
            $this->totalPrice -= ($product->pro_price* ((100 - $newProduct['sale'])/100));
            $this->totalQuantity--;
        }
    }
//    public function UpdateCartTest($product, $id, $quantity){
//        $newProduct = ['quantity' => 0, 'price' => $product->price,'productInfo' => $product];
//        if($this->products){
//            if(array_key_exists($id, $this->products)){
//                $newProduct = $this->products[$id];
//            }
//        }
//
//        if($quantity > $newProduct['quantity']){
//            $newProduct['quantity'] = $quantity;
//            $newProduct['price'] =  ($newProduct['quantity']) * $product->price;
//            $this->products[$id] = $newProduct;
//            $this->totalPrice = 0;
//            $this->totalPrice += ($newProduct['price']);
//            $this->totalQuantity += $newProduct['quantity'];
//        }else{
//            $newProduct['quantity'] = $quantity;
//            $newProduct['price'] =  ($newProduct['quantity']) * $product->price;
//            $this->products[$id] = $newProduct;
//            $this->totalPrice -= $newProduct['price'];
//            $this->totalQuantity -= $newProduct['quantity'];
//        }
//
//
//
//
//    }
    public static function destroy(){
        $cart = Session::get('Cart');
        if($cart==true){
            // Session::destroy();
            Session::forget('Cart');
        }
    }
    protected function test($total){

    }
    public static function total(){
        return Session::get('Cart')->totalPrice;
    }
}
