<?php

namespace App\Http\Controllers;

use App\Models\Chatting;
use Illuminate\Http\Request;

class ChattingController extends Controller
{
    //
    public function getNoiDung(){
        $chatting = Chatting::all();
        return view('chat',['chatting'=>$chatting]);
    }
}
