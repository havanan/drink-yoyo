<?php

namespace App\Http\Controllers\Admin;

use App\Model\BillProduct;
use App\Model\ProductType;
use App\Repositories\Bill\BillEloquentRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
    public function getDateType(Request $request){
        $date_type = $request->get('date_type');
        return view('admin.report.date_type',compact('date_type'));
    }
    public function drink(){
        $types = ProductType::where('status',1)->pluck('name','id');
        $params = [];
        $data = $this->findDrink($params);
        $date_type = request('date_type') != null ? request('date_type') : 'date';
        return view('admin.report.drink',compact('data','types','date_type'));
    }
    public function findDrinkByDateType(Request $request){
        dd($request->all());
    }
    public function findDrink($params){
        $data = BillProduct::join('products','products.id','bill_products.product_id')
            ->select(
            'products.name','bill_products.product_id','products.avatar',
            DB::raw('Count(bill_products.product_id) as count_product')
        );
        if (isset($params['year']) && $params['year'] != null){
            $data = $data->whereMonth('bill_products.created_at',$params['month'])->whereYear('bill_products.created_at',$params['year']);
        }
        if (isset($params['type_id']) && $params['type_id'] != null){
            $data = $data->whereMonth('products.type_id',$params['type_id']);
        }
        $data = $data->groupBy('products.name','bill_products.product_id','products.avatar')->orderBy('count_product','desc')->limit(10)->get();
        return $data;
    }
}
