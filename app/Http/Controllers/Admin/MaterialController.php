<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestMaterialCreate;
use App\Http\Requests\RequestMaterialUpdate;
use App\Http\Requests\RequestProductUpdate;
use App\Http\Requests\RequestUnitCreate;
use App\Model\Material;
use App\Model\ProductCategory;
use App\Model\ProductType;
use App\Model\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class MaterialController extends Controller
{

    public function index(){
        $data = $this->getMaterialList();
        return view('admin.material.index',compact('data'));
    }
    public function getMaterialList(){
        return Material::orderBy('id','desc')->get();
    }
    public function create(){
        $units = $this->getUnit();
        return view('admin.material.create',compact('units'));

    }
    public function getUnit(){
        $units = Unit::where('status',1)->orderBy('id','desc')->get();
        return $units;
    }
    public function findProductTypes($categories_id){
        $types = ProductType::where('status',1)->where('category_id',$categories_id)->selectRaw('name as text,id')->get();
        return $types;
    }
    public function insert(RequestMaterialCreate $request){
       $params = $request->all();
       $params['slug'] = Str::slug($params['name']);
       unset($params['_token']);

       $create = Material::create($params);

       if ($create){
            return redirect()->route('admin.material.index')->with('success','Tạo hàng hóa thành công !');
       }else{
           return back()->with('errors','Tạo hàng hóa thất bại');
       }

    }
    public function delete(Request $request){
        $id = $request->get('id');
        $info = Material::find($id);
        if (empty($info)){
            return 'false';
        }
        $delete = $info->delete();
        if ($delete){
            return 'true';
        }
    }
    public function getList(){
        $data = $this->getMaterialList();

        return view('admin.material.table_body',compact('data'));
    }
    public function edit($id){
        $data = Material::findOrFail($id);
        $units = $this->getUnit();
        return view('admin.material.edit',compact('data','units'));
    }
    public function update(RequestMaterialUpdate $request){
        $params = $request->all();
        $id = $params['id'];
        $info = Material::findOrFail($id);
        $params['slug'] = Str::slug($params['name']);
        unset($params['_token']);
        unset($params['id']);
        $update = Material::where('id',$id)->update($params);
        if ($update){
            return redirect()->route('admin.material.index')->with('success','Sửa hàng hóa thành công !');
        }
        else{
            return  back()->with('errors','Sửa hàng hóa thất bại');
        }
    }
    public function unitCreate(RequestUnitCreate $request){
        $params = $request->only('name','percent');
        $create = Unit::create($params);
        if ($create){
            return back()->with('success','Tạo đơn vị thành công');

        }else{
            return back()->with('errors','Tạo đơn vị thất bại');

        }
    }

}
