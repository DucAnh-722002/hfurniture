<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function Products(){
        $popular1 = DB::table('products')->orderBy('viewers','asc')->where('status',1)->limit(7)->get();
        $popular = $popular1->slice(0,3);
        $popular2 = $popular1->slice(4,6);
        $newest1 = DB::table('products')->orderBy('created_at','asc')->where('status',1)->limit(7)->get();
        $newest = $newest1->slice(0,3);
        $newest2 = $newest1->slice(4,6);
        $sold1= DB::table('products')->where('status',1 and 'featured',1)->limit(7)->get();
        $sold = $sold1->slice(0,3);
        $sold2 = $sold1->slice(4,6);
        $data = ['popular'=>$popular, 'newest'=>$newest,'sold'=>$sold,'popular2'=>$popular2,'newest2'=>$newest2,'sold2'=>$sold2];
        return view('client/index',$data);
    }

}
