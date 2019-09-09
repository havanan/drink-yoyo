<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductCategory;
use App\Model\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index(){
        return view('admin.product.index');
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
       unset($params['_token']);
    }

}
