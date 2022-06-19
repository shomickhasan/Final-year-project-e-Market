<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Alert;
use App\Http\Requests;
use Artisan;
use Log;
use Image;
/*use Storage;*/
class SettingController extends Controller
{
	public function setting(){
		 
        $settings=DB::table('settings')->where('id',1)->first();
        return view('admin.setting.edit',compact('settings'));
	}

	public function updatesetting(Request $request,$id){

		$data=array();
        $data['shopname']=$request->shopname;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['phone_optional']=$request->phone_optional;
        $data['address']=$request->address;
        $data['youtoube']=$request->youtoube;
        $data['youtoube']=$request->youtoube;
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['vat']=$request->vat;
        $data['shipping_charge']=$request->shipping_charge;
        $image=$request->file('logo');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/category/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['logo']=$image_url;
                $done=DB::table('settings')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'settings Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('setting')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'settings Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
               $done=DB::table('settings')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'settings Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('setting')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'settings Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }

	}
    
    public function DatabaseBackup(){
        $directory="storage/app/Laravel";
       
        return view('admin.setting.db_backup')->with('files',File::allFiles($directory));
        dd($files);
        /*$disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);

        $files = $disk->files(config('laravel-backup.backup.name'));
        $backups = [];
        // make an array of backup files, with their filesize and creation date
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(config('laravel-backup.backup.name') . '/', '', $f),
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);

        return view("backup.backups")->with(compact('backups'));*/
    }

    public function slider(){
        $slider=DB::table('slider')->where('id',1)->first();
        return view('admin.setting.slider',compact('slider'));
    }

    public function sliderupdate(Request $request,$id){

        $data=array();


        $image_one=$request->main_slider_1;
        $image_two=$request->main_slider_2;
        $image_three=$request->main_slider_3;
        $image_four=$request->sub_slider_1;
        $image_five=$request->sub_slider_2;
        $image_six=$request->sub_slider_3;
        $image_seven=$request->mid_slider_1;
        $image_eight=$request->mid_slider_2;
        $image_nine=$request->mid_slider_3;
        $image_ten=$request->mid_slider_4;

    if($image_one && $image_two && $image_three && $image_four && $image_five && $image_six && $image_seven && $image_eight && $image_nine && $image_ten){
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(230,300)->save('media/product/'.$image_one_name);
                $data['main_slider_1']='media/product/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(230,300)->save('media/product/'.$image_two_name);
                $data['main_slider_2']='media/product/'.$image_two_name; 

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(230,300)->save('media/product/'.$image_three_name);
                $data['main_slider_3']='media/product/'.$image_three_name; 



            $image_four_name= hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
                Image::make($image_four)->resize(230,300)->save('media/product/'.$image_four_name);
                $data['sub_slider_1']='media/product/'.$image_four_name; 



                 $image_five_name= hexdec(uniqid()).'.'.$image_five->getClientOriginalExtension();
                Image::make($image_five)->resize(230,300)->save('media/product/'.$image_five_name);
                $data['sub_slider_2']='media/product/'.$image_five_name; 



                 $image_six_name= hexdec(uniqid()).'.'.$image_six->getClientOriginalExtension();
                Image::make($image_six)->resize(230,300)->save('media/product/'.$image_six_name);
                $data['sub_slider_3']='media/product/'.$image_six_name; 

                 $image_seven_name= hexdec(uniqid()).'.'.$image_seven->getClientOriginalExtension();
                Image::make($image_seven)->resize(230,300)->save('media/product/'.$image_seven_name);
                $data['mid_slider_1']='media/product/'.$image_seven_name; 

                $image_eight_name= hexdec(uniqid()).'.'.$image_eight->getClientOriginalExtension();
                Image::make($image_eight)->resize(230,300)->save('media/product/'.$image_eight_name);
                $data['mid_slider_2']='media/product/'.$image_eight_name; 

                $image_nine_name= hexdec(uniqid()).'.'.$image_nine->getClientOriginalExtension();
                Image::make($image_nine)->resize(230,300)->save('media/product/'.$image_nine_name);
                $data['mid_slider_3']='media/product/'.$image_nine_name; 

                 $image_ten_name= hexdec(uniqid()).'.'.$image_ten->getClientOriginalExtension();
                Image::make($image_ten)->resize(230,300)->save('media/product/'.$image_ten_name);
                $data['mid_slider_4']='media/product/'.$image_ten_name;     
                $notification = array(
                    'message' => 'Update Slider Successfully.',
                    'alert-type' => 'success'
                );
                $done=DB::table('slider')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'slider Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('slider')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'slider Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }  
                
        }

    }
}
