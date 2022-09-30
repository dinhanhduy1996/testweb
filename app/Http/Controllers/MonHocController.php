<?php

namespace App\Http\Controllers;

use App\Models\MonHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MonHocController extends Controller
{
    //
    public function getDanhSach(){
        return view('monhoc');
    }
}
