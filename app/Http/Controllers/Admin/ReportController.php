<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class ReportController extends Controller
{
    public function TodayOrder()
    {
    	  $today=date('d-m-y');
    	  $order=DB::table('orders')->where('status',0)->where('date',$today)->get();
    	  return view('admin.report.today_order',compact('order'));
    }
    public function TodayDelevered()
    {
          $today=date('d-m-y');
    	  $order=DB::table('orders')->where('status',3)->where('date',$today)->get();
    	  return view('admin.report.today_order',compact('order'));
    	  //dd($order);
    }

    public function ThisMonth()
    {
    	  $month=date('F');
    	  $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
    	  return view('admin.report.today_order',compact('order'));
    }

     public function search()
    {
    	 return view('admin.report.search');
    }

    public function searchByYear(Request $request)
    {
    	 $year=$request->year;
    	 $total=DB::table('orders')->where('status',3)->where('year',$year)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('year',$year)->get();
         return view('admin.report.search_report',compact('order','total'));
         //echo "$total";

    }

    public function searchByMonth(Request $request)
    {
        $month=$request->month;
    	 $total=DB::table('orders')->where('status',3)->where('month',$month)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
         return view('admin.report.search_report',compact('order','total'));
        
        
    }

    public function searchByDate(Request $request)
    {
    	  $date=$request->date;
          $newdate = date("d-m-y", strtotime($date));
          $total=DB::table('orders')->where('status',3)->where('date',$newdate)->sum('total');
          $order=DB::table('orders')->where('status',3)->where('date',$newdate)->get();
         return view('admin.report.search_report',compact('order','total'));

    }
    public function UserRole()
    {
    	 $user=DB::table('users')->where('type',2)->get();
    	 return view('admin.role.all_role',compact('user'));
    }

    public function UserCreate()
    {
    	  return view('admin.role.create');
    }

      public function UserStore(Request $request)
    {
    	 $data=array();
    	 $data['name']=$request->name;
    	 $data['phone']=$request->phone;
    	 $data['email']=$request->email;
    	 $data['password']= Hash::make($request->password);
    	 $data['category']=$request->category;
         $data['coupon']=$request->coupon;
         $data['product']=$request->product;
         $data['blog']=$request->blog;
    	 $data['order']=$request->order;
    	 $data['report']=$request->report;
    	 $data['role']=$request->role;
    	 $data['return']=$request->return;
    	 $data['contact']=$request->contact;
    	 $data['comment']=$request->comment;
    	 $data['setting']=$request->setting;
    	 $data['stock']=$request->stock;
    	 $data['other']=$request->other;
    	 $data['newslatter']=$request->newslatter;
    	 $data['type']=2;

    	 $done=DB::table('users')->insert($data);
    	   if ($done) {
                $notification = array(
                    'message' => 'Child Admin Create Successfully.',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'message' => 'Child Admin Create UnSuccessfully',
                    'alert-type' => 'danger'
                );
                return redirect()->back()->with($notification);
            }
    	
    }

    public function UserDelete($id)
    {
    	 DB::table('admins')->where('id',$id)->delete();
    	 $notification=array(
                 'messege'=>' Admin Delete Successfully',
                 'alert-type'=>'success'
                       );
         return Redirect()->back()->with($notification);
    }
}


