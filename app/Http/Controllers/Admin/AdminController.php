<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.deshboard');
    }

   
}
