<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
use App\Http\Requests\RequestProductCreate;
use App\Http\Requests\RequestProductUpdate;
use App\Model\Material;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $categories_data = ProductCategory::where('status',1)->get();
        $categories = $this->genProductTypesData($categories_data);
        return view('admin.material.create',compact('categories'));

    }
    public function findProductTypes($categories_id){
        $types = ProductType::where('status',1)->where('category_id',$categories_id)->selectRaw('name as text,id')->get();
        return $types;
    }
    public function genProductTypesData($categories_data,$selected = false){
        $gr = [];
        $i = 0;
        foreach ($categories_data as  $item){

            if ($item->getAllType != null && count($item->getAllType ) > 0){

                $grType = $this->getType($item->getAllType,$selected);

                $gr[$i] = [
                    'text' => $item->name,
                    'children' => $grType
                ];
                $i++;
            }
        }
        return $gr;
    }
    public function getType($allType,$selected = false){
        $grType = [];
        $i = 0;
        foreach ($allType as $key => $item){

            $grType[$i] = [

                'id' => $item->id,

                'text' => $item->name,

            ];
            if ($selected && $selected == $item->id){
                $grType[$i]['selected'] = true;
            }

            $i++;
        }
        return $grType;
    }
    public function insert(RequestProductCreate $request){
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
        $categories_data = ProductCategory::where('status',1)->get();
        $selected = $data['type_id'];
        $categories = $this->genProductTypesData($categories_data,$selected);
        return view('admin.material.edit',compact('data','categories'));
    }
    public function update(RequestProductUpdate $request){
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

}
