<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function register()
    {
        return view("frontend.home.register");
    }

    public function doregister(Request $request)
    {
        $new_user_data = ([
            "full_name" => $request->input('full_name'),
            "email" => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => "2",
        ]);
        $new_user = User::create($new_user_data);
        if ($new_user && $new_user instanceof User) {
            Auth::loginUsingId($new_user->id);
            return redirect('admin/users');
        } else {
            return redirect()->back()->with("registerError", "خطای ثبت نام");
        }

    }

    public function login()
    {
        return view("frontend.home.login");
    }

    public function dologin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return redirect('/admin');
        } else {
            return redirect()->back()->with("LoginError", "نام کاربری و رمز عبور اشتباه");
        }
//        $credentials = $request->only('email', 'password');
//        if (Auth::attempt($credentials)) {
//            return redirect('admin/users');
//        } else {
//            return redirect()->back()->with("LoginError", "ورود کاربر ناموفق");
//        }
    }
//        $email = $request->input("email");
//        $password = bcrypt($request->input("password"));
//        if (Auth::attempt(array('email' => $email, 'password' => bcrypt($password)))) {
//            return redirect()->route("admin.users.list");
//        } else {
//            return redirect()->back()->with("LoginError", "نام کاربری و رمز عبور اشبتاه می باشد");


}
