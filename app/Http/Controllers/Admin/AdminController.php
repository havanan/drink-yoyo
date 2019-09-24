<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\Bill;
use App\Model\DateLog;
use App\Model\Product;
use App\Model\ProductType;
use App\Model\User;
use App\Repositories\Bill\BillEloquentRepository;
use App\Repositories\Email\EmailEloquentRepository;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $email;
    private $bill;
    public function __construct(EmailEloquentRepository $email,BillEloquentRepository $bill)
    {
        $this->email = $email;
        $this->bill = $bill;
    }

    public function index(){

        $params=[
            'date' => Carbon::now()->format('Y-m-d'),
            'time_type' =>'today'
        ];
        $month = Carbon::now()->format('m');
        $data = $this->getDataDashBoard($params);
        $chartBillMonth = $this->getLineChart(['month' => $month]);
        $chartBillMonth = json_encode($chartBillMonth);
        $admin = Admin::where('id',2)->get()->toArray();
        $this->sendReport($admin,10);
        return view('admin.home.index',compact('data','chartBillMonth'));
    }
    public function getTotalDrink(){
        $grTypeDrink = ProductType::where('category_id',1)->pluck('id');
        return Product::whereIn('type_id',$grTypeDrink)->where('status',1)->count();
    }
    public function getDataDashBoard($params){
        $data = array();
        $totalBill = $this->bill->getTotalBill($params);
        $month['month'] = $this->getMonth();
        $totalBillMonth = $this->bill->getTotalDB($month);
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
        $data['billData'] = $this->bill->getBillData($params);

        $data['title'] = $this->getDateTitle($params['time_type']);
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
        $data_db = $this->bill->getMoneyByMonth($params['month']);
        $data = $this->convertLineData($data_db);
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
    public function sendReport($users,$num_date){
        $f_date = Carbon::now()->subDay($num_date)->format('d/m/Y');
        $t_date = Carbon::now()->subDay(1)->format('d/m/Y');
        $subject = 'Báo cáo doanh thu từ ngày: '.$f_date.' đến '.$t_date;
        $old_date = $this->getOldDate($num_date);
        if (count($users) == 1){
            $this->email->sendSingerUser($users[0],$old_date,$subject);
        }else{
            $this->email->sendManyUser($users,$old_date,$subject);
        }
        return true;
    }
}
