<?php

namespace App\Http\Controllers;

use App\Model\Table;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getTableList(){
        $table = Table::where('is_active',1)->get();
        return $table;
    }
    public function getAllCartItem(){
        return Cart::content()->groupBy('id');
    }

    public function getTotalMoney(){
        $total = Cart::subtotal();
        $total = (int) $total*1000;
        return $total;
    }
    public function getTotalItem(){
        return Cart::count();
    }
    public function getDisCount($request){
        $disCount = $request->get('disCount');

        if ($disCount < 0 || $disCount > 100){
            $disCount = 0;
        }
        $totalMoney = $this->getTotalMoney();
        $disCountPrice = ($totalMoney*$disCount)/100;

        return $disCountPrice;
    }
    public function getCartInfo($request = false){
        $totalMoney = $this->getTotalMoney();
        $disCountPrice = 0;
        $cartInfo = [
            'list' =>  $this->getAllCartItem(),
            'totalMoney' => $totalMoney,
            'total' =>$this->getTotalItem(),
        ];
        if ($request){
            $disCountPrice = $this->getDisCount($request);

        }
        $cartInfo['priceFinal'] = $totalMoney - $disCountPrice;
        $cartInfo['disCount'] = $disCountPrice;
        return $cartInfo;
    }
}
