<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teams.index', [
            'teams' => Team::orderBy('created_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $team = new Team();

        $team->name = $request->name;
        $team->body = $request->body;
        $team->slug = \Str::slug($request->name);
        $team->save();

        return response()->json(['status' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $updateRoute = route('teams.update', ['team' => $team->slug]);

        return view('admin.teams.edit', [
            'team'        => $team,
            'updateRoute' => $updateRoute,
        ]);
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
    public function destroy(Team $team)
    {
        $team->delete();

        return to_route('dashboard')
            ->with('flashMessage', 'Team was deleted 😭')
            ->with('flashMessageType', 'success');
    }
}
