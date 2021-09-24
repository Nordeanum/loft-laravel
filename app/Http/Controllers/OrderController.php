<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use App\Models\Order;
use App\Models\User;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (!isset($user)) {
            return redirect()->route('home');
        }

        if ($user->isAdmin) {
            $orders = Order::all();
        } else {
            $orders = Order::where('email', $user->email)->get();
        }

        return view('order.list', [
            'user' => $user,
            'categories' => Category::all(),
            'orders' => $orders
        ]);
    }

    public function create($id)
    {
        return view('order.create', [
            'user' => auth()->user(),
            'categories' => Category::all(),
            'game' => Game::find($id)
        ]);
    }

    public function success()
    {
        $admins = User::where('isAdmin', true)->get();
        foreach ($admins as $user)
        {
            Mail::send('mail.orderCreate', ['user' => $user], function ($m) use ($user) {
                $m->from('laravel@app.com', 'Your Application');
                if (!empty($user->notification_email)) {
                    $m->to($user->notification_email, $user->name)->subject('Order created!');
                } else {
                    $m->to($user->email, $user->name)->subject('Order created!');
                }
            });
        }

        return view('order.success', [
            'user' => auth()->user(),
            'categories' => Category::all(),
        ]);
    }

    public function add(OrderRequest $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->product_id = $request->product_id;
        $order->save();

        return redirect()->route('orders.success');
    }
}
