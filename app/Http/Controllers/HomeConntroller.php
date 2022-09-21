<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class HomeConntroller extends Controller
{
    public function getall(){
        // $getall= DB::table('categories')->select('id','name')->get();
        // return view('client/index',['getall'=>$getall]);
    }
    public function sptloai($id=0){
        $sptloai = DB::table('products')->where('id_category',$id)->limit(5)->get();
        $loai = DB::table('categories')->select('name')->where('id', $id)->first();
   
        return view ('client/products/list',[
            'data'=>$sptloai,
            'loai' => $loai
        ]);
    }

    public function index()
    {
        return view('client.index');
    }
}
