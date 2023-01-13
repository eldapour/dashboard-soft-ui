<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function index(){
        if (Auth::guard('admin')->check()){
            return redirect('admin');
        }
        return view('Admin.auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'email'   =>'required|exists:admins',
            'password'=>'required'
        ],[
            'email.exists'      => 'هذا البريد غير مسجل معنا',
            'email.required'    => 'يرجي ادخال البريد الالكتروني',
            'password.required' => 'يرجي ادخال كلمة المرور',
        ]);
        if (Auth::guard('admin')->attempt($data)){
            return redirect('admin')->with('success','login success');
        }
        return back();
    }

    public function logout(){
        Auth::guard('admin')->logout();
        toastr()->info('تم تسجيل الخروج');
        return redirect('admin/login');
    }

}//end class
