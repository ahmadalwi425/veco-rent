<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_device;

class noderedController extends Controller
{
    public function nodered(){
        $id = session()->get('id');
        $data = user_device::where('id_user',$id)->get();
        return view('admin.nodered',compact('data'));
    }
}
