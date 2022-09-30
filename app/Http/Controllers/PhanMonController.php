<?php

namespace App\Http\Controllers;

use App\Models\BaiHoc;
use App\Models\PhanMon;
use Illuminate\Http\Request;

class PhanMonController extends Controller
{
    //
    public function getDanhSach($tenphanmon,$id){
        $phanmon = PhanMon::find($id);
        return view('phanmon',['phanmon'=>$phanmon]);
    }
}
