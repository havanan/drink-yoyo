<?php

namespace App\Http\Controllers\Frontend;

use App\Model\ProductCategory;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function index(){
        $product_categories = ProductCategory::where('status',1)->get();
        $cartInfo = $this->getCartInfo();
        return view('frontend.home.index',compact('product_categories','cartInfo'));
    }
}
