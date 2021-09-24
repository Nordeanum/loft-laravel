@extends('layouts.default')

@section('content')
    <div class="content-main__container">
        <div class="panel panel-default">
            <div class="panel-heading">Купить игру {{$game->name}}. Оставьте контактные данные. Администратор с вами свяжется.</div>
            <form action="{{route('orders.add')}}" method="post">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <td>Ваше имя</td>
                        <td>
                            <input type="text" name="name"
                                   @if (isset($user))
                                   value="{{$user->name}}"
                                   @endif
                            >
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Ваш email</td>
                        <td>
                            <input type="text" name="email"
                                   @if (isset($user))
                                   value="{{$user->email}}"
                                   @endif
                            >
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{$errors->first('email')}}</div>
                            @endif
                        </td>
                    </tr>
                    <input type="hidden" name="product_id" value="{{$game->id}}">
                    @if ($errors->has('product_id'))
                        <div class="alert alert-danger">{{$errors->first('product_id')}}</div>
                    @endif
                </table>
                <input type="submit" value="купить">
            </form>
        </div>
    </div>
@endsection