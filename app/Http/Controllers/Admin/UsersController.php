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

    public function edit()
    {
        dd("user controller edit");
    }

    public function update()
    {
        dd("user controller update");
    }

    public function remove()
    {
        dd("user controller remove");
    }

}
