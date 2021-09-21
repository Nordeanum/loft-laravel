<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;

class HomeController extends Controller
{
    function index()
    {
        $categories = Category::all();
        $games = Game::All();
        return view('shop/index', ['categories' => $categories, 'games' => $games]);
    }

    function pageSingleNew()
    {
        $categories = Category::all();
        $games = Game::All();

        return view('shop/1news', ['categories' => $categories, 'games' => $games]);
    }

}
