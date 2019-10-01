<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 11:27 AM
 */

namespace App\Repositories\Bill;
use App\Model\Bill;
use App\Model\Booking;

use Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class ExampleEloquentRepository
 * @package App\Repositories
 */
class BillEloquentRepository implements BillRepositoryInterface
{
    public function getTotalDB($params){
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
    public function getMoneyByMonth($month){
        $data = Bill::selectRaw('sum(price_final) as total, date(created_at) as date')->groupBy(DB::raw('DATE(created_at)'))->whereMonth('created_at',$month)->get();
        return $data;
    }
    public function getByDate(array $dates){
        $data = array();
        foreach ($dates as $key=>$item){
            $params['date'] = $item;
            $data[$key] = $this->getTotalDB($params)->toArray();
            $data[$key]['date'] = $item;
        }
        return $data;
    }
    public function getTotalBill($params){
        $totalBill = 0;
        if (isset($params['date'])){
            $date['date'] = $params['date'];
            $totalBill = $this->getTotalDB($date);

        }
        if (isset($params['week'])){
            $date['month'] = $params['week'];
            $totalBill = $this->getTotalDB($date);
        }
        return $totalBill;
    }
    public function getBillData($params = false){
        $data = Bill::orderBy('bills.id','desc');
        $data = $data->leftJoin('users','users.id','bills.staff_id');
        $data = $data->select('bills.*')->selectRaw('users.name as staff_name');
        if (isset($params['date'])){
            $data = $data->whereDate('bills.created_at',$params['date']);
        }
        if (isset($params['week'])){
            $data = $data->whereBetween('bills.created_at',$params['week']);
        }
        if (isset($params['month'])){
            $data = $data->whereBetween('bills.created_at',$params['month']);
        }
        $data = $data->get();
        return $data;
    }
    public function getBillByMonth($month){
        $data = Bill::orderBy('bills.id','desc');
        $data = $data->leftJoin('users','users.id','bills.staff_id');
        $data = $data->select('bills.*')->selectRaw('users.name as staff_name');
        $data = $data->whereMonth('bills.created_at',$month);
        $data = $data->get();
        return $data;
    }
    public function getDeleteList(){
        $data = Bill::withTrashed()->orderBy('id','desc')->get();
        return $data;
    }
}