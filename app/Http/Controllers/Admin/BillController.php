<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bill;
use App\Http\Controllers\Controller;
use App\Repositories\Bill\BillEloquentRepository;
use App\Repositories\Email\EmailEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    private $bill;
    public function __construct(EmailEloquentRepository $email,BillEloquentRepository $bill)
    {
        $this->email = $email;
        $this->bill = $bill;
    }


    public function index(){
        $data = $this->bill->getBillData();
        return view('admin.bill.index',compact('data'));
    }
    public function deleted(){
        $data = $this->getDeleteList();
        return view('admin.bill.deleted',compact('data'));
    }
    public function getListData(){
        $data = Bill::orderBy('id','desc')->get();
        return $data;
    }
    public function getDeleteList(){
        $data = Bill::withTrashed()->orderBy('id','desc')->get();
        return $data;
    }
    public function getList(){
        $data = $this->getListData();
        return view('admin.bill.table_body',compact('data'));
    }
    public function delete(Request $request){
        $id = $request->get('id');
        $info = Bill::withTrashed()->find($id);
        if (empty($info)){
            return 'false';
        }
        $info->user_deleted = Auth::user()->id;
        if ($info->save()){
            $delete = $info->delete();
            if ($delete){
                return 'true';
            }
        }
    }
    public function view(Request $request){
        $id = $request->get('id');
        $billInfo = Bill::find($id);
        if ($billInfo == null){
            return 'false';
        }
        $cartInfo =json_decode($billInfo['content'],true);
        return view('admin.bill.bill_info',compact('cartInfo','billInfo'));
    }
}
