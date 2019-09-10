<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
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
        $data = Product::all();
        return view('admin.product.index',compact('data'));
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
    public function genProductTypesData($categories_data){
        $gr = [];
        $i = 0;
        foreach ($categories_data as  $item){

            if ($item->getAllType != null && count($item->getAllType ) > 0){

                $grType = $this->getType($item->getAllType);

                $gr[$i] = [
                    'text' => $item->name,
                    'children' => $grType
                ];

                $i++;
            }
        }
        return $gr;
    }
    public function getType($allType){
        $grType = [];
        $i = 0;
        foreach ($allType as $key => $item){

            $grType[$i] = [

                'id' => $item->id,

                'text' => $item->name,

            ];

            $i++;
        }
        return $grType;
    }
    public function insert(Request $request){
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

}
