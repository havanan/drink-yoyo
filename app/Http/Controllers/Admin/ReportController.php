<?php

namespace App\Http\Controllers\Admin;

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
        $month = Carbon::now()->format('m');

        $params=[
            'time_type' =>'month',
            'month' => $month
        ];
        $data = $this->getDataDashBoard($params);
        $chartBillMonth = $this->getLineChart(['month' => $month]);
        $data['chartBillMonth'] = json_encode($chartBillMonth);
        return view('admin.report.index',compact('data'));
    }
    public function getLineChart($params){
        $data_db = $this->bill->getMoneyByMonth($params['month']);
        $data = $this->convertLineData($data_db);
        return $data;
    }
    public function findData(Request $request){
        $time = $request->get('time');
        $params['time_type'] = 'month';
        $params['month'] = $time;
        $data = $this->getDataDashBoard($params);
        return view('admin.report.dashboard_data',compact('data'));

    }
    public function findDataByDate(Request $request){
        $input = $request->only('f_date','t_date');
        $params['month'] = [
            $input['f_date'],$input['t_date']
        ];
        $data['totalBill'] = $this->bill->getTotalDB($params);
        $data['billData'] = $this->bill->getBillData($params);
        $chartBillMonth = $this->bill->getMoneyByDate($params);
        $chartBillMonth = $this->convertLineData($chartBillMonth);
        $data['chartBillMonth'] = json_encode($chartBillMonth);
        return view('admin.report.dashboard_data',compact('data'));

    }
    public function getDataDashBoard($params){
        $data = array();
        $data['totalBill'] = $this->bill->getTotalBillByMonth($params);
        $data['billData'] = $this->bill->getBillByMonth($params['month']);
        $chartBillMonth = $this->getLineChart(['month' => $params['month']]);
        $data['chartBillMonth'] = json_encode($chartBillMonth);
        return $data;
    }
}
