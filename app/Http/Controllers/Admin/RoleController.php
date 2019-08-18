<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    public function index(){
        return view('admin.role.index');
    }
    public function getRoleList(Request $request){
        $params = $request->all();
        $data = Role::paginate(10);
        return $data;
    }
    public function create(Request $request){
        $params = $request->only('name','display_name','description');
        $params['author'] = Auth::user()->id;
        $create = Role::create($params);
        if ($create){
            return back()->with('success','Tạo Role thành công!');
        }else{
            return back()->with('error','Tạo Role thất bại!');
        }
    }

}
