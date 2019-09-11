<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bill;
use App\Model\Product;
use App\Model\ProductType;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        $today = Carbon::now()->format('Y-m-d');
        $month = Carbon::now()->format('m');

        $grTypeDrink = ProductType::where('category_id',1)->pluck('id');

        $totalBill = Bill::whereDate('created_at',$today)->selectRaw('count(id) as amount,sum(price_final) as money')->first();
        $totalBillMonth = Bill::whereMonth('created_at',$month)->selectRaw('count(id) as amount,sum(price_final) as money')->first();
        $billPercent = ($totalBill['amount'] / $totalBillMonth['amount'])*100;
        $billPercentMoney = ($totalBill['money'] / $totalBillMonth['money'])*100;
        $billPercent = $this->roundQuick($billPercent);
        $billPercentMoney = $this->roundQuick($billPercentMoney);

        $totalMenu = Product::where('status',1)->count();
        $totalDrink = Product::whereIn('type_id',$grTypeDrink)->where('status',1)->count();

        $staff = User::where('status',1)->count();
        return view('admin.home.index',compact('totalDrink','totalMenu','totalBill','totalBillMonth','billPercent','billPercentMoney','staff'));
    }

}
