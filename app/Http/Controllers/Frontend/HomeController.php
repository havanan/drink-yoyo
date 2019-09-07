<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
//        dd(Hash::make('abcd1234'));
        return view('frontend.home.index');
    }
}
