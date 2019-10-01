<?php

namespace App\Http\Controllers\Admin;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view("admin.team.index", compact('teams'))->with("panel_title", "لیست تیم ها");
    }

    public function create()
    {

        return view("admin.team.create")->with("panel_title", "ثبت تیم");

    }

    public function store(Request $request)
    {
        Team::create($request->all());
        return redirect()->route("admin.teams.list")->with("message", "تیم با موفقیت ثبت شد");
    }

    public function edit($team_id)
    {
        $team = Team::find($team_id);
        return view('admin.team.edit', compact('team'))->with("panel_title", "ویرایش تیم");
    }

    public function update(Request $request, $team_id)
    {
        $team = Team::find($team_id);
        $team->update($request->all());
        return redirect()->route("admin.teams.list")->with("message", "تیم با موفقیت ویرایش شد ");
//        return view("admin.team.index")->with("message", "تیم با موفقیت ویرایش شد");
    }

    public function syncplayer($team_id)
    {
        $players = Player::all();
        $team = Team::find($team_id);
        $team_player = $team->players()->get()->pluck('player_id')->toarray();
        return view("admin.team.player", compact("players", 'team_player'))->with("panel_title", "لیست بازیکنان تیم ");
    }

    public function update_syncplayer(Request $request, $team_id)
    {
        $team_item = Team::find($team_id);
        $players = $request->input('players');
        $team_item->players()->sync($players);
        return redirect()->route("admin.teams.list")->with("message", "ویرایش بازیکنان تیم با موفقیت انجام شد ");
    }

    public function remove($team_id)
    {
        $team = Team::find($team_id);
        $team->destroy($team_id);
        return redirect()->back()->with("message", "حذف با موفقیت انجام شد");
    }
}
