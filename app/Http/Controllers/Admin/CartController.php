<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductCategory;
use App\Model\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function tableList(){
        $table = $this->getTableList();
        return view('admin.cart.table_list',compact('table'));
    }
    public function getTableList(){
        $table = Table::where('is_active',1)->get();
        return $table;
    }
    public function billCreate(){
        $product_categories = ProductCategory::where('status',1)->get();
        return view('admin.cart.bill_create',compact('product_categories'));

    }
    public function menuRefresh(){
        $product_categories = ProductCategory::where('status',1)->get();
        return view('admin.cart.include.menu',compact('product_categories'));

    }

}
