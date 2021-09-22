<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    function index(Request $request)
    {
        $user = auth()->user();

        $categories = Category::All();

        $category = Category::where('name', $request->category)->first();
        $games = Game::where('category_id', $category->id)->get();

        return view('shop/category', ['user' => $user, 'categories' => $categories, 'games' => $games, 'current_category' => $category]);
    }

    function create()
    {
        return view('categories.create');
    }

    function edit($id)
    {
        $category = Category::query()->find($id);
        return view('categories.edit', ['category' => $category]);
    }

    function delete(Request $request)
    {
        Category::destroy($request->id);
        return redirect()->route('home');
    }

    function add(CategoryRequest $request)
    {
        $game = new Category();
        $game->name = $request->name;
        $game->description = $request->description;
        $game->save();

        return redirect()->route('home');
    }

    function save(CategoryRequest $request)
    {
        $game = Category::query()->find($request->id);
        $game->name = $request->name;
        $game->description = $request->description;
        $game->save();

        return redirect()->route('home');
    }
}
