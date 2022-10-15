<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameResultRequest;
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
        return view('admin.gameResults.index', [
            'games' => GameResult::orderBy('created_at', 'desc')->get(),
        ]);
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
    public function store(StoreGameResultRequest $request)
    {
        GameResult::create($request->validated());

        return response()->json([
            'status'  => 200,
            'message' => 'messaaa',
        ]);
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
        return view('admin.gameResults.edit', [
            'teams'      => Team::all(),
            'gameResult' => $gameResult,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGameResultRequest $request, GameResult $gameResult)
    {
        $gameResult->update($request->validated());
        return to_route('gameResult.index')
            ->with('flashMessage', 'Yes. You update game result!')
            ->with('flashMessageType', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameResult $gameResult)
    {
        //
    }
}
