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

class ReportController extends Controller
{


    public function getBillData($params){

        $data  = Bill::orderBy('id','desc');
        if (isset($params['now'])){
            $data = $data->whereDate('created_at',$params['now']);
        }
        if (isset($params['week'])){
            $data = $data->whereWeek('created_at',$params['week']);
        }
        if (isset($params['month'])){
            $data = $data->whereMonth('created_at',$params['month']);
        }
        if (isset($params['staff_id'])){
            $data = $data->where('staff_id',$params['staff_id']);
        }
        if (isset($params['status'])){
            $data = $data->where('status',$params['status']);
        }
        if (isset($params['table_number'])){
            $data = $data->where('table_number',$params['table_number']);
        }
        $data = $data->get();
        return $data;
    }

}
