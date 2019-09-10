<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Bill;
use App\Model\Product;
use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//https://github.com/bumbummen99/LaravelShoppingcart
class CartController extends Controller
{
    public function addToCart(Request $request){
        $product_id = $request->get('id');
        $product_info = Product::find($product_id);
        if ($product_info == null ){
            return 'false';
        }

        $itemCart = [
           'id' => $product_id,
           'name' => $product_info['name'],
            'qty' => 1,
            'weight' => 0,
            'price' => $product_info['price']
        ];
        $add = Cart::add($itemCart);
        if (isset($add->rowId) && $add->rowId != null){
            $cartInfo = $this->getCartInfo($request);
            return view('frontend.home.product_selected_list',compact('cartInfo'));
        }
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
        $rowId = $request->get('rowId');
        $qty = $request->get('qty');
        Cart::update($rowId,$qty);
        $cartInfo = $this->getCartInfo($request);
        return view('frontend.home.product_selected_list',compact('cartInfo'));
    }

    public function payment(Request $request){
        $formData = $request->get('formData');
        $cartInfo = $this->getCartInfo($request);
        if ($cartInfo['priceFinal'] <= 0){

            return 'false';
        }
        $formData['content'] = json_encode($cartInfo);
        $formData['staff_id'] = Auth::user()->id;
        $formData['total'] = $cartInfo['total'];
        $formData['total_money'] = $cartInfo['totalMoney'];
        $formData['price_final'] = $cartInfo['priceFinal'];

        DB::beginTransaction();

        try {
            $billInfo = Bill::create($formData);
            $cartInfo =json_decode($billInfo['content'],true);
            DB::commit();
            return view('frontend.home.bill_info',compact('cartInfo','billInfo'));
        } catch (\Exception $e) {
            DB::rollback();
            return 'false';
        }
    }
    public function destroyCart(){
        Cart::destroy();
        $cartInfo = $this->getCartInfo();
        return view('frontend.home.product_selected_list',compact('cartInfo'));

    }
    public function disCount(Request $request){
        $cartInfo = $this->getCartInfo($request);
        return view('frontend.home.product_selected_list',compact('cartInfo'));
    }
    public function remove(Request $request){
        $rowId = $request->get('rowId');
        Cart::remove($rowId);
        $cartInfo = $this->getCartInfo($request);
        return view('frontend.home.product_selected_list',compact('cartInfo'));

    }
    public function billView($id){
        $billInfo = Bill::findOrFail($id);
        $cartInfo =json_decode($billInfo['content'],true);
        return view('frontend.home.bill_info',compact('cartInfo','billInfo'));
        }
}
