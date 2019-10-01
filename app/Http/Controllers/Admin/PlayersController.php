<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view("admin.player.index", compact('players'))->with("panel_title", "لیست بازیکنان");
    }

    public function create()
    {
        $teams = Team::all();
        return view("admin.player.create", compact('teams'))->with("panel_title", "ثبت بازیکن");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:png,jpeg,jpg|max:2048',
        ], []);
        $new_file_name = Str::random(10) . '.' . $request->file("file")->getClientOriginalExtension();
        $request->file('file')->move(public_path('images'), $new_file_name);
        $new_players = ([
            "full_name" => $request->input("full_name"),
            "address_pic" => $new_file_name,
        ]);
        $player = Player::create($new_players);
        $player->teams()->sync($request->input('team_id'));
        return redirect()->route("admin.players.list");
    }

    public function edit(Request $request, $player_id)
    {
        $player = Player::find($player_id);
        $player_teams = $player->teams()->get()->pluck('team_id')->toArray();
        $teams = Team::all();
        return view('admin.player.edit', compact("player", "teams", "player_teams"))->with("panel_title", "ویرایش بازیکن");
    }

    public function update(Request $request, $player_id)
    {
        if ($request->has('file')) {
            $new_file_name = Str::random(10) . '.' . $request->file("file")->getClientOriginalExtension();
            $request->file('file')->move(public_path('images'), $new_file_name);
            $new_players = ([
                "full_name" => $request->input("full_name"),
                "address_pic" => $new_file_name,
            ]);
            $player = Player::find($player_id);
            $player->update($new_players);
            $player->teams()->sync($request->input('team_id'));
            return redirect()->route("admin.players.list");
        } else {
            $new_players = ([
                "full_name" => $request->input("full_name"),
            ]);
            $player = Player::find($player_id);
            $player->update($new_players);
            $player->teams()->sync($request->input('team_id'));
            return redirect()->route("admin.players.list");
        }
    }

    public function remove($player_id)
    {
        $player = Player::find($player_id);
        $player->destroy($player_id);
        return redirect()->back();
    }
}
