<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    function index(Request $request)
    {
        $user = auth()->user();

        $categories = Category::all();

        $category = Category::where('name', $request->category)->first();
        $game = Game::where('name', $request->game)->first();
        return view('shop/1product', ['user' => $user, 'categories' => $categories, 'game' => $game, 'current_category' => $category]);
    }

    function create()
    {
        return view('games.create');
    }

    function edit($id)
    {
        $game = Game::query()->find($id);
        return view('games.edit', ['game' => $game]);
    }

    function delete(Request $request)
    {
        Game::destroy($request->id);
        return redirect()->route('home');
    }

    function add(GameRequest $request)
    {
        $game = new Game();
        $game->category_id = $request->category_id;
        $game->name = $request->name;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->save();

        return redirect()->route('home');
    }

    function save(GameRequest $request)
    {
        $game = Game::query()->find($request->id);
        $game->category_id = $request->category_id;
        $game->name = $request->name;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->save();

        return redirect()->route('home');
    }
}
