<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GameResult;
use App\Models\Team;
use Illuminate\Http\Request;

class GameResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();

        if (!count($teams)) {
            return to_route('dashboard')
                ->with('flashMessage', 'If you want add game result first you need add team')
                ->with('flashMessageType', 'danger');
        }

        return view('admin.gameResults.create', [
            'teams' => $teams,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GameResult $gameResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GameResult $gameResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GameResult $gameResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameResult $gameResult)
    {
        //
    }
}
