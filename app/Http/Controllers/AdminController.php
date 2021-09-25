<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (!isset($user)) {
            return redirect()->route('home');
        }

        if (!$user->isAdmin) {
            return redirect()->route('home');
        }

        return view('admin.admin', [
            'user' => $user,
            'categories' => Category::take(10)->get(),
        ]);
    }

    public function edit(Request $request) {
        $user = User::query()->find($request->id);

        $user->notification_email = $request->notification_email;
        $user->save();

        return redirect()->route('admin');
    }
}
