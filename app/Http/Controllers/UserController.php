<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function getDangNhap(){
        if(Auth::check()){
            return redirect(route('trangchu'));
        }
        return view('login');
    }
    public function postDangNhap(Request $request){
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required|min:6|max:12'
        ],
        [
            'username.required'=>'bạn chưa nhập tài khoản',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu chưa nhập đúng',
            'password.max'=>'mật khẩu nhập chưa đúng'
        ]
    );
    if(Auth::attempt(['name'=>$request->username,'password'=>$request->password])){
        return redirect(route('trangchu'));
    }
    else return redirect(route('dangnhap'))->with('thongbao','tài khoản không tồn tại');
    }
    public function getDangKy(){
        return view('sign-up');
    }
    public function postDangKy(Request $request){
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required|min:6|max:12',
            'email'=>'email'
        ],
        [
            'username.required'=>'bạn chưa nhập tài khoản',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu chưa nhập đúng',
            'password.max'=>'mật khẩu nhập chưa đúng',
            'email'=>'vui lòng nhập đúng email'
        ]
    );
    $user = new User;
    $user->name = $request->username;
    $user->password = Hash::make($request->password);
    $user->email = $request->email;
    $user->save();
    return redirect(route('dangky'))->with('thongbao','đăng ký thành công');
    }
    public function dangXuat(){
        Auth::logout();
        return redirect(route('dangnhap'));
    }
}
