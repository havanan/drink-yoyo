<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function index(){
        return view('admin.role.index');
    }
    public function getRoleList($params = false){
        $data = Role::select('name','display_name','description')->get()->toJson();
        $data = [
            [
                "Tiger Nixon",
                "System Architect",
                "Edinburgh",
            ],
            [
                "Garrett Winters",
                "Accountant",
                "Tokyo",
            ],
            [
                "Ashton Cox",
                "Junior Technical Author",
                "San Francisco",
            ],
        ];
        return $data;
    }
    public function create(Request $request){
        $params = $request->only('name','display_name','description');
        $create = Role::create($params);
        if ($create){
            return back()->with('success','Tạo Role thành công!');
        }else{
            return back()->with('error','Tạo Role thất bại!');
        }
    }

}
