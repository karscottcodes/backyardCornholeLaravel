<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Models\Result;
use App\Models\Team;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("results.index", [
            "results" => Result::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("results.create", ["teams" => Team::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResultRequest $request)
    {
        $result = Result::create($request->validated());

        $result->teams()->attach($request->team1_id);
        $result->teams()->attach($request->team2_id);

        Session::flash("success", "Result Added Successfully");
        return redirect() -> route ("results.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
