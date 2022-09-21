<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productController extends Controller
{
    function details($id=0){
        $products=DB::table('products')->where('id',$id)->first();
        $data = ['products'=>$products];
        return view('client/products/details',$data);
    }
}
