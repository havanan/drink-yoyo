<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bill;
use App\Model\Product;
use App\Model\User;
use App\Repositories\Bill\BillEloquentRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    private $bill;
    public function __construct(BillEloquentRepository $bill)
    {
        $this->bill = $bill;
    }
    public function index(){
        $params=[
            'date' => Carbon::now()->format('m'),
            'time_type' =>'month'
        ];
        $month = Carbon::now()->format('m');
        $data = $this->getDataDashBoard($params);
        $chartBillMonth = $this->getLineChart(['month' => $month]);
        $chartBillMonth = json_encode($chartBillMonth);

        return view('admin.report.index',compact('data','chartBillMonth'));
    }
    public function getLineChart($params){
        $data_db = $this->bill->getMoneyByMonth($params['month']);
        $data = $this->convertLineData($data_db);
        return $data;
    }
    public function findData(Request $request){
        $time = $request->get('time');
        $params = $this->genTime($time);
        $params['time_type'] = $time;
        $data = $this->getDataDashBoard($params);
        return view('admin.report.dashboard_data',compact('data'));

    }
    public function getDataDashBoard($params){
        $data = array();
        $data['totalBill'] = $this->bill->getTotalBill($params);
        $data['billData'] = $this->bill->getBillByMonth($params['month']);
        return $data;
    }
}
