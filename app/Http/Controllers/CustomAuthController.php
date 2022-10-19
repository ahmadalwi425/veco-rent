<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customUser;


class CustomAuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request['email'];
        $pass = $request['password'];
        $users = customUser::where('email', $request->get('email'))->where('password', md5($pass))->count();
        $user = customUser::where('email', $request->get('email'))->where('password', md5($pass))->first();
        if($users==0){
            return redirect('login')->with('failed','Login gagal');
        } else{
            session(['id' => $user->id, 'login' => true,'id_role' => $user->id_role, 'webpath'=>$user->webpath,'isVerified'=>$user->isVerified]);
            // Session::put('login', 'Selamat anda berhasil login');
            return redirect('gps');
        }
    }

    public function r_login(){
        return view('auth.login');
    }

    public function register(Request $request){
        customUser::create([
            'name'     => $request['name'],
            'email'     => $request['email'],
            'password'   => md5($request['password'])
        ]);
        return view('auth.afterregister');
    }

    public function r_register(){
        return view('auth.register');
    }
    public function logout(){
        session()->flush();
        return redirect('r_login');
    }
}
