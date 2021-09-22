<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;

class HomeController extends Controller
{
    function index()
    {
        $user = auth()->user();

        $categories = Category::all();
        $games = Game::All();
        return view('shop/index', ['user' => $user, 'categories' => $categories, 'games' => $games]);
    }
}
