<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\Bill;
use App\Model\DateLog;
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
        $admin = Admin::select('name','email')->get()->toArray();
        $this->sendReport($admin,10);
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
    public function getOldDate($number){
        $date = array();
        $key = 0;
        for ($i=1;$i<=$number;$i++){
            $date[$key] = Carbon::now()->subDay($i)->format('Y-m-d');
            $key++;
        }
        return $date;
    }
    public function getBillByDate(array $dates){
        $data = array();
        foreach ($dates as $key=>$item){
            $params['date'] = $item;
            $data[$key] = $this->getTotalBillDB($params)->toArray();
            $data[$key]['date'] = $item;
        }
        return $data;
    }
    public function getNotSendData($num_date,$email){

        $date = $this->getOldDate($num_date);
        $sended_date = DateLog::whereIn('date',$date)->where('email',$email)->where('is_send',1)->distinct('date')->orderBy('date','desc')->pluck('date')->toArray();

        if (count($sended_date) > 0){
           $not_send = array_diff($date,$sended_date);
           $not_send = array_values($not_send);
        }else{
            $not_send = $date;
        }
        $data = $this->getBillByDate($not_send);
        return $data;

    }
    public function makeEmailData($user,$num_date,$emails){
        $data = array();
        $not_send_data = $this->getNotSendData($num_date,$emails);
        $data['receiver'] =$user;
        $data['data'] = $not_send_data;
        return $data;
    }
    public function sendReport($users,$num_date){
        $f_date = Carbon::now()->subDay($num_date)->format('d/m/Y');
        $t_date = Carbon::now()->subDay(1)->format('d/m/Y');
        $subject = 'Báo cáo doanh thu từ ngày: '.$f_date.' đến '.$t_date;
        if (count($users)>0){
            foreach ($users as $key=>$item){
                $email = $item['email'];
                $params = [
                    'email' =>$email ,
                    'date' => Carbon::now()->subDay()->format('Y-m-d'),
                    'is_send' => 1
                ];
                $data[$key] =  $this->makeEmailData($item,$num_date,$email);
                $data[$key]['subject'] = $subject;
                $this->sendEmail($data[$key]);
                $this->insertLog($params);
            }
        }

    }
    public function insertLog($params){
        DateLog::create($params);
    }

}
