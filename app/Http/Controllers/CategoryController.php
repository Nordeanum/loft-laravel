<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;

class CategoryController extends Controller
{
    function index(Request $request)
    {
        $categories = Category::All();

        $category = Category::where('name', $request->category)->first();
        $games = Game::where('category_id', $category->id)->get();

        return view('shop/category', ['categories' => $categories, 'games' => $games, 'current_category' => $category]);
    }
}
