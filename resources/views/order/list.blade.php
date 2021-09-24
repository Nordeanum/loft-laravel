@extends('layouts.default')

@section('content')
    <div class="content-main__container">
        @auth
            @if ($user->isAdmin)
                <h2>Заказы всех пользователей</h2>
            @else
                <h2>Заказы пользователя: {{$user->name}}</h2>
            @endif
        @endauth
        <h2></h2>
        <table border="1">
            <tr>
                <th width="5%">ID</th>
                <th width="5%">Имя заказчика</th>
                <th width="5%">Email заказчика</th>
                <th width="5%">Товар</th>
            </tr>
            @foreach($orders as $order)
            <tr>
                <td width="5%">{{$order->id}}</td>
                <td width="5%">{{$order->name}}</td>
                <td width="5%">{{$order->email}}</td>
                <td width="5%">{{$order->product->name}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection