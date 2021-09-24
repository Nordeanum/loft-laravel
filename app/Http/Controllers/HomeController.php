<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;

class HomeController extends Controller
{
    function index()
    {
        return view('shop/index', [
            'user' => auth()->user(),
            'categories' => Category::all(),
            'games' => Game::query()->orderBy('id', 'DESC')->paginate('6')
        ]);
    }
}
