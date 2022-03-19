<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //

    public function index(){
        return view('auth.register');
    }

    public function user_save(Request $request){
        $user_name = $request->name;
        $user_password = $request->password;
        $user_status = 1;
        $new_user = new \App\Login();

        $new_user->name = $user_name;
        $new_user->password = $user_password;
        $new_user->admin_status = $user_status;

        $register_succes = $new_user->save();

        if ($register_succes == true){
           return redirect('login')->with('msg','Danke für Ihre Einlogen');
        }else{
           return redirect('auth.register')->with('msg','Sie haben ein Fehler gemacht');
        }
    }

    public function login(){
        return view('login');
    }
}
