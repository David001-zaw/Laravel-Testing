<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::orderBy('updated_at', 'desc')->paginate(5);
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(StoreGameRequest $request)
    {
        $game = new Game();
        $game->name = $request->name;
        $game->price = $request->price;
        $game->save();

        return back()->with('success', 'Game ('. $game->name.') created successfully.');
    }

    public function show($locale, Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit($locale, Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(UpdateGameRequest $request, $locale, Game $game)
    {
        $game->name = $request->name;
        $game->price = $request->price;
        $game->update();

        return redirect()->route('games.index', app()->getLocale())->with('success', 'Game ('. $game->name.') updated successfully.');
    }

    public function destroy($locale, Game $game)
    {
        $game->delete();

        return redirect()->route('games.index', app()->getLocale())->with('success', 'Game ('. $game->name.') deleted successfully.');
    }
}
