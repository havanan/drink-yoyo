<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Bill;
use App\Model\ProductCategory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product_categories = ProductCategory::where('status',1)->get();
        $cartInfo = $this->getCartInfo();
        return view('frontend.home.index',compact('product_categories','cartInfo'));
    }
    public function billList(){
//        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
//        whereDay('created_at', '=', $today)->
        $data = Bill::orderBy('id','desc')->get();
        return view('frontend.home.bill_list',compact('data'));
    }
    public function getBillInfo(Request $request){
        $id = $request->id;
        if ($id == null){
            $id = session('last_bill_id');
        }
        $billInfo = Bill::find($id);
        if ($billInfo == null){
            return 'false';
        }
        $cartInfo =json_decode($billInfo['content'],true);
        return view('frontend.home.bill_info',compact('cartInfo','billInfo'));
    }
    public function getBillBarcode(Request $request){
        $id = $request->id;
        if ($id == null){
            $id = session('last_bill_id');
        }
        $billInfo = Bill::find($id);
        if ($billInfo == null){
            return 'false';
        }
        $cartInfo =json_decode($billInfo['content'],true);
        return view('frontend.home.bill_barcode',compact('cartInfo','billInfo'));
    }
}
