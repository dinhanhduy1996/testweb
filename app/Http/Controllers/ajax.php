<?php

namespace App\Http\Controllers;

use App\Models\TuVung;
use Illuminate\Http\Request;

class ajax extends Controller
{
    
    public function sendData(Request $request){
        $tuvung = new TuVung;
        $tuvung->tienganh = $request->tienganh;
        $tuvung->tiengviet =$request->tiengviet;
        $tuvung->lop = $request->lop;
        $tuvung->unit = $request->unit;
       $tuvung->save();
    }
    public function getData(Request $request){
        if($request->unit != null){
        $tuvung = TuVung::where('lop','=',$request->lop)->where('unit','=',$request->unit)->limit($request->sotu)->inRandomOrder()->get();
        }else{
            $tuvung = TuVung::where('lop','=',$request->lop)->limit($request->sotu)->inRandomOrder()->get(); 
        }
        $tuvung = json_encode($tuvung);
        return view('getdataAjax',['tuvung'=>$tuvung]);
    }
    
}
