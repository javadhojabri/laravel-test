<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home()
    {
        $user = User::all()->count();
        $team = Team::all()->count();
        $player = Player::all()->count();
        return view('admin.index', compact('team', 'user', 'player'))->with("panel_title", "مدیریت وب سایت");
    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'))->with('panel_title', 'لیست کاربران');
    }

    public function create()
    {
        return view('admin.user.create')->with('panel_title', 'ایجاد کاربر');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route("admin.users.list")->with("message", "کاربر جدید با موفقیت ثبت شد");
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view("admin.user.edit", compact('user'))->with("panel_title", "ویرایش کاربر");
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if (!$request->input('password') == '') {
            $user->update($request->all());
        } else {
            $user->update(
                [
                    'full_name' => $request->input('full_name'),
                    'email' => $request->input('email'),
                    'role' => $request->input('role'),
                ]
            );
        }
        return redirect()->route("admin.users.list")->with("message", "کاربر با موفقیت ویرایش شد");
    }

    public function remove($user_id)
    {
        $user = User::find($user_id);
        $user->destroy($user_id);
        return redirect()->route("admin.users.list")->with("message", "کاربر با موفقیت حذف شد");

    }

}
