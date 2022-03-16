<?php

namespace App\Http\Controllers;

use App\Mahlzeit;
use Illuminate\Http\Request;

class MahlzeitController extends Controller
{
    //

    public function anlegen(Request $request){
        Mahlzeit::create([
            'name'=>$request->name,
            'date_tage'=>$request->date_tage
        ]);
        $mahlzeitens = Mahlzeit::all();
        return view('menu', $mahlzeitens)->with(['mahlzeitens' => $mahlzeitens]);
    }

    public function auswertung(){
        $mahlzeitens = Mahlzeit::all();
        return view('auswertung')->with(['mahlzeitens' => $mahlzeitens]);
    }

    public function aufrufen(){
        $mahlzeitens = Mahlzeit::all();
        return view('menu')->with(['mahlzeitens' => $mahlzeitens]);
    }

}
