<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bill;
use App\Model\Product;
use App\Model\ProductType;
use App\Model\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index(){
        $params=[
            'date' => Carbon::now()->format('Y-m-d'),
            'time_type' =>'today'
        ];
        $month = Carbon::now()->format('m');
        $data = $this->getDataDashBoard($params);
        $chartBillMonth = $this->getLineChart(['month' => $month]);
        $chartBillMonth = json_encode($chartBillMonth);
        return view('admin.home.index',compact('data','chartBillMonth'));
    }
    public function getTotalDrink(){
        $grTypeDrink = ProductType::where('category_id',1)->pluck('id');

        return Product::whereIn('type_id',$grTypeDrink)->where('status',1)->count();
    }

    public function getDataDashBoard($params){
        $data = array();
        $totalBill = $this->getTotalBill($params);
        $month['month'] = $this->getMonth();


        $totalBillMonth = $this->getTotalBillDB($month);

        if (isset($params['month'])){

            $totalBill = $totalBillMonth;
        }
        $data['totalBill'] = $totalBill;
        $data['totalBillMonth'] = $totalBillMonth;

        $billPercent = $this->getPercent([$totalBill['amount'],$totalBillMonth['amount']]);
        $billPercentMoney = $this->getPercent([$totalBill['money'],$totalBillMonth['money']]);
        
        $data['billPercent'] = $this->getRoundNumber($billPercent);
        $data['billPercentMoney'] = $this->getRoundNumber($billPercentMoney);

        $data['totalMenu'] = Product::where('status',1)->count();
        $data['totalDrink'] = $this->getTotalDrink();

        $data['staff'] = User::where('status',1)->count();
        $data['billData'] = $this->getBillData($params);

        $data['title'] = $this->getDateTitle($params['time_type']);
        return $data;
    }
    public function getTotalBillDB($params){
        $data = Bill::selectRaw('count(id) as amount,sum(price_final) as money');
        if (isset($params['date'])){
            $data = $data->whereDate('created_at',$params['date']);
        }
        if (isset($params['month'])){
            $data = $data->whereBetween('created_at',$params['month']);
        }
        $data = $data->first();
        return $data;
    }
    public function getTotalBill($params){
        $totalBill = 0;
        if (isset($params['date'])){
            $date['date'] = $params['date'];
            $totalBill = $this->getTotalBillDB($date);

        }
        if (isset($params['week'])){
            $date['month'] = $params['week'];
            $totalBill = $this->getTotalBillDB($date);
        }
        return $totalBill;
    }
    public function getBillData($params){
        $data = Bill::orderBy('id','desc');
        if (isset($params['date'])){
            $data = $data->whereDate('created_at',$params['date']);
        }
        if (isset($params['week'])){
            $data = $data->whereBetween('created_at',$params['week']);
        }
        if (isset($params['month'])){
            $data = $data->whereBetween('created_at',$params['month']);
        }
        $data = $data->get();
        return $data;
    }
    public function getDateTitle($time_type){

        switch ($time_type){
            case $time_type == 'yesterday':
                $data = Carbon::now()->subDay()->format('d/m/Y');
                break;
            case $time_type == 'weekly':
                $week = $this->getWeek();
                $data = $week[0].' -> '.$week[1];
                break;
            case $time_type == 'monthly':
                $month = $this->getMonth();
                $data = $month[0].' -> '.$month[1];
                break;
            default:
                $data = Carbon::now()->format('d/m/Y');
        }
        return $data;
    }
    public function findData(Request $request){
        $time = $request->get('time');
        $params = $this->genTime($time);
        $params['time_type'] = $time;
        $data = $this->getDataDashBoard($params);
        return view('admin.home.dashboard_data',compact('data'));

    }
    public function getLineChart($params){
        $data_db = $this->getBillMoneyByMonth($params['month']);
        $data = $this->convertLineData($data_db);
        return $data;
    }
    public function getBillMoneyByMonth($month){
        $data = Bill::selectRaw('sum(price_final) as total, date(created_at) as date')->groupBy(DB::raw('DATE(created_at)'))->whereMonth('created_at',$month)->get();
        return $data;
    }
    public function convertLineData($data_db){
        $chart = array();
        $labels = array();
        $data = array();
        if (count($data_db) > 0){
            foreach ($data_db as $key => $item){
                $labels[$key] = date('d/m/Y',strtotime($item->date));
                $data[$key] = (float) $item->total;
            }
        }
        $chart['labels'] = $labels;
        $chart['data'] = $data;
        return $chart;
    }

}
