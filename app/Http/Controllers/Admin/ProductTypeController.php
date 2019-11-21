<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductCategory;
use App\Model\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductTypeController extends Controller
{
    public function index(){
        $data = ProductType::where('status',1)->orderBy('id','desc')->get();
        $categories = ProductCategory::where('status',1)->pluck('name','id');
        return view('admin.productCat.index',compact('data','categories'));
    }
    public function getList(){
        $data = ProductType::where('status',1)->orderBy('id','desc')->get();
        return view('admin.productCat.table_body',compact('data'));

    }
    public function create(Request $request){
        $category_id = $request->get('category_id');
        $name = $request->get('name');
        if ($category_id == null){
            $input = [
                'name' => $name,
                'status' =>1
            ];
          $create = ProductCategory::create($input);
        }else {
            $input = [
                'category_id' => $category_id,
                'name' => $name,
                'status' =>1
            ];
          $create = ProductType::create($input);
        }
        if ($create){
            return back()->with('success','Tạo loại sản phẩm thành công');

        }else{
            return back()->with('errors','Tạo loại sản phẩm thất bại');

        }
    }
    public function delete(Request $request){
        $id = $request->get('id');
        $info = ProductType::findorFail($id);
        $delete = $info->delete();
        if ($delete){
            return 'true';
        }
    }
}
