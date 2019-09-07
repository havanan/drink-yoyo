<?php

namespace App\Http\Controllers\Admin;

use App\Model\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{

   public function index(){
       $data = Table::all();
       return view('admin.table.index',compact('data'));
   }
   public function import($sl){
       if ($sl > 0){
           for($i=1;$i<=$sl;$i++){
               Table::create([
                   'name'=>'Bàn '.$i,
               ]);

           }
           echo 'Done !';
       }
   }

}
