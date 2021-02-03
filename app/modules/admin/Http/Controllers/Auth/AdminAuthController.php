<?php

namespace Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function login(){
        return view( viewRoute('login','auth'));
    }

    public function doLogin(LoginRequest $request){
        //dd('ddd');
        $remember_me = $request->has('remember');
        if(auth()->guard('admin')->attempt(['email'=>$request->input("email"), 'password'=>$request->input("password")])){
            dd(auth('admin')->check());
            //notify()->success('تم الدخول بنجاح');
            return redirect('dash-board/admin/index');
        }
        //notify()->error('خطأ في البيانات.. يرجي المحاوله لاحقاً');
        return redirect()->back()->with(['error'=>'هناك خطأ بالبيانات '])->withInput($request->all());
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('admin.get.login');
    }
}
