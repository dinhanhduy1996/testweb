<?php

namespace App\Http\Controllers;

use App\Models\BaiHoc;
use Illuminate\Http\Request;

class BaiHocController extends Controller
{
    //
    public function getDanhSach($tenbai,$id){
        $baihoc = BaiHoc::find($id);
        return view('baihoc',['baihoc'=>$baihoc]);
    }
 
}
