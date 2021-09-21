<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;

class GameController extends Controller
{
    function index(Request $request)
    {
        $categories = Category::all();

        $category = Category::where('name', $request->category)->first();
        $game = Game::where('name', $request->game)->first();
        return view('shop/1product', ['categories' => $categories, 'game' => $game, 'current_category' => $category]);
    }
}
