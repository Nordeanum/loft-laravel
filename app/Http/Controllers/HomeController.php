<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;

class HomeController extends Controller
{
    public function index()
    {
        return view('shop/index', [
            'user' => auth()->user(),
            'categories' => Category::take(10)->get(),
            'games' => Game::query()->orderBy('id', 'DESC')->paginate('6')
        ]);
    }
}
