<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("teams.index", [
            "teams" => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teams.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        Team::create($request->validated());

        Session::flash("success", "Team Added Successfully");
        return redirect() -> route ("team.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view("teams.show", compact("team"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("teams.edit", compact("team"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Team::Destroy($id);
        Session::flash("caution", "Team Trashed Successfully.");
        return redirect()->route("teams.index");
    }

    public function destroy($id)
    {
        $team = Team::withTrashed()->where("id", $id)->first();
        $team -> forceDelete();
        Session::flash("danger", "Team Deleted successfully.");
    }

    public function restore($id)
    {
        $team = Team::withTrashed()->where("id", $id)->first();
        $team -> restore();
        Session::flash("success", "Team Restored Successfully.");
        return redirect() -> route("teams.trashed");
    }
}
