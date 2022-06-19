<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class TrainerController extends Controller
{
    public function index(){
        $trainer=DB::table('trainer')->get();
        return view('admin.trainer.create',compact('trainer'));
      
    }

    public function store(Request $request){
        $data=array();
        $data['trainer_name']=$request->trainer_name;
         $image=$request->file('image');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/category/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                $done=DB::table('trainer')->insert($data);
                if ($done) {
                    $notification = array(
                        'message' => 'trainer Added Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'trainer Added Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
                $notification = array(
                        'message' => 'trainer Image Mustbe  Upload Thank you!!',
                        'alert-type' => 'warning'
                    );
                    return redirect()->back()->with($notification);
            }
            
    }
 

    public function edit($id){
        $trainer=DB::table('trainer')->where('id',$id)->first();
        return view('admin.trainer.edit',compact('trainer'));
    }

   

    public function update(Request $request,$id){

        $data=array();
        $data['trainer_name']=$request->trainer_name;
        $image=$request->file('image');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/category/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                $done=DB::table('trainer')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'trainer Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('trainer')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'trainer Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
               $done=DB::table('trainer')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'trainer Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('trainer')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'trainer Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }
    }

    public function delete($id){
        $done=DB::table('trainer')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'trainer Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'trainer Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }
}
