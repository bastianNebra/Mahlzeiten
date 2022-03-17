<?php

namespace App\Http\Controllers;

use App\Mahlzeit;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class UserController extends Controller
{
    //


    public function  index()
    {
        return view('login');
    }

    public function  login(Request $request)
    {
        session_start();
        $_SESSION['test'] = 42;


        $users = User::where(['name'=>$request->username,'password'=>$request->password])->exists();
        $_SESSION['users'] = $users;

        if ($users == 1){
            $admins = User::where(['admin_status'=>1,'name'=>$request->username])->exists();
            $_SESSION['admins'] = $admins;
                if ($admins == 1){
                    $mahlzeitens = Mahlzeit::all();
                    return view('admin')->with(['mahlzeitens' => $mahlzeitens]);
                }else{
                    $mahlzeitens = Mahlzeit::all();
                    return view('menu', $mahlzeitens)->with(['mahlzeitens' => $mahlzeitens]);
                }
        }
        else{
            return view('login');
        }
    }
}
