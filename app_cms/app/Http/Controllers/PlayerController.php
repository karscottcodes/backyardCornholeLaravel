<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Player;
use App\Models\Team;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("players.index", [
            "players" => Player::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("players.create", ["teams" => Team::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        $player = Player::create($request->validated());
        $player->teams()->attach($request->team_id);

        Session::flash("success", "Player Added Successfully");
        return redirect() -> route ("players.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view("players.show", ["player" => $player, "teams" => Team::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view("players.edit", ["player" => $player, "teams" => Team::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $player->update($request->validated());
        $player->teams()->detach();
        $player->teams()->attach($request->team_id);
        Session::flash("success", "Player Updated Successfully.");
        return redirect()->route("players.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Player::Destroy($id);
        Session::flash("caution", "Player Trashed Successfully.");
        return redirect()->route("players.index");
    }

    public function destroy($id)
    {
        $player = Player::withTrashed()->where("id", $id)->first();
        $player -> forceDelete();
        Session::flash("danger", "Player Deleted successfully.");
    }

    public function restore($id)
    {
        $player = Player::withTrashed()->where("id", $id)->first();
        $player -> restore();
        Session::flash("success", "Player Restored Successfully.");
        return redirect() -> route("players.trashed");
    }
}
