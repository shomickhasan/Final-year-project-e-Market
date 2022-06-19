<?php

namespace App\Http\Controllers\Saller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class SallerController extends Controller
{
    public function index(){
        $check = DB::table('users')->where('id',Auth::id())->where('user_status',1)->first();
        if($check ){
            return view('saller.deshboard');
  
        }else{
            return view('saller.pandingdeshboard');
        }
        
    }

    public function productsView($id)
    {
         $products=DB::table('products')->where('subcategory_id',$id)->paginate(9);
         $brands= DB::table('products')->where('subcategory_id',$id)->select('brand_id')->groupBy('brand_id')->get();
         
         return view('user.all_products',compact('products','brands'));
         //dd($products);
    }
}
