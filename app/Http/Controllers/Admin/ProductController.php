<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
use App\Http\Requests\RequestProductCreate;
use App\Http\Requests\RequestProductUpdate;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index(){
        $data = $this->getProductList();
        return view('admin.product.index',compact('data'));
    }
    public function getProductList(){
        return Product::orderBy('id','desc')->get();
    }
    public function getProduct(Request $request){
        $params = $request->all();
        $data = Product::paginate(10);
        $data = Common::toTable($data);
        return $data;
    }
    public function create(){
        $categories_data = ProductCategory::where('status',1)->get();
        $categories = $this->genProductTypesData($categories_data);
        return view('admin.product.create',compact('categories'));

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
       $create = Product::create($params);

       if ($create){
            return redirect()->route('admin.product.index')->with('success','Tạo sản phẩm thành công !');
       }else{
           return back()->with('errors','Tạo sản phẩm thất bại');
       }

    }
    public function delete(Request $request){
        $id = $request->get('id');
        $info = Product::find($id);
        if (empty($info)){
            return 'false';
        }
        $delete = $info->delete();
        if ($delete){
            return 'true';
        }
    }
    public function getList(){
        $data = $this->getProductList();
        return view('admin.product.table_body',compact('data'));
    }
    public function edit($id){
        $data = Product::findOrFail($id);
        $categories_data = ProductCategory::where('status',1)->get();
        $selected = $data['type_id'];
        $categories = $this->genProductTypesData($categories_data,$selected);
        return view('admin.product.edit',compact('data','categories'));
    }
    public function update(RequestProductUpdate $request){
        $params = $request->all();
        $id = $params['id'];
        $info = Product::findOrFail($id);
        $params['slug'] = Str::slug($params['name']);
        unset($params['_token']);
        unset($params['id']);
        $update = Product::where('id',$id)->update($params);
        if ($update){
            return redirect()->route('admin.product.index')->with('success','Sửa sản phẩm thành công !');
        }
        else{
            return  back()->with('errors','Sửa sản phẩm thất bại');
        }
    }

}
