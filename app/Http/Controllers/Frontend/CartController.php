<?php

namespace App\Http\Controllers\Frontend;

use App\Model\ProductCategory;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
//https://github.com/bumbummen99/LaravelShoppingcart
class CartController extends Controller
{
    public function addToCart(Request $request){

    }
    public function removeFromCart($product_id){
      $remove =  Cart::remove($product_id);
        if ($remove){
            return 'true';
        }else{
            return 'false';
        }
    }
    public function updateCart(Request $request){

    }
    public function getCart(Request $request){

    }
    public function destroyCart(){
        Cart::destroy();
        return 'true';
    }
}
