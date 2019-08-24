<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RoleController extends Controller
{
    public function index(){
        return view('admin.role.index');
    }
    public function getRoleList(){
        $data = Role::paginate(10);
        return $data;
    }
    public function create(Request $request){
        $params = $request->only('name','display_name','description');
        $params['author'] = Auth::user()->id;
        DB::beginTransaction();
        try {
            Role::create($params);
            DB::commit();
            return back()->with('success','Tạo Role thành công!');
            // all good
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return back()->with('error','Tạo Role thất bại!');

            // something went wrong
        }

    }

}
