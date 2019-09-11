<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{

    public function index(){
        $data = $this->getList();
        return view('admin.bill.index',compact('data'));
    }
    public function getList(){
        $data = Bill::withTrashed()->get();
        return $data;
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
}
