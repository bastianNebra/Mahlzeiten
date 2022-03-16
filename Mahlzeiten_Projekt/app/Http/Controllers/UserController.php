<?php

namespace App\Http\Controllers;

use App\Mahlzeit;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function  index()
    {
            return view('login');
    }

    public function  login(Request $request)
    {
        $users = User::where(['name'=>$request->username,'password'=>$request->password])->exists();
        if ($users == 1){
            $admins = User::where(['admin_status'=>1,'name'=>$request->name])->exists();
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
