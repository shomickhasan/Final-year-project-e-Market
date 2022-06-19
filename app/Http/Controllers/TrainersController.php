<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TrainersController extends Controller
{
    public function index(){
        
        $train=DB::table('trainer')->get();
        $subtrainer=DB::table('trainers')
        ->join('trainer','trainers.trainer_id','trainer.id')
        ->select('trainers.*','trainer.trainer_name')
        ->get();
        return view('admin.trainers.create',compact('train','subtrainer'));
      
    }
    public function store(Request $request){
        $data=array();
        $data['trainer_id']=$request->trainer_id;
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['date']=$request->date;
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
                $done=DB::table('trainers')->insert($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Trainers Added Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Trainers Added Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
                $notification = array(
                        'message' => 'Trainers Image Mustbe  Upload Thank you!!',
                        'alert-type' => 'warning'
                    );
                    return redirect()->back()->with($notification);
            }
        


    }

    public function edit($id){
        $trainers=DB::table('trainers')->where('id',$id)->first();
        $trainer=DB::table('trainer')->get();
        return view('admin.trainers.edit',compact('trainers','trainer'));

    }

  

    public function update(Request $request,$id){

        $data=array();
        $data['trainer_id']=$request->trainer_id;
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['date']=$request->date;
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
                $done=DB::table('trainers')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Trainers Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('trainers')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Trainers Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
               $done=DB::table('trainers')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Trainers Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('trainers')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Trainers Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }
        

    }

    public function delete($id){
        $done=DB::table('trainers')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Trainers Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Trainers Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }
}
