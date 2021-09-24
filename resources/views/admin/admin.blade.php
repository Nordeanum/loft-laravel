@extends('layouts.default')

@section('content')
    <div class="content-main__container">
        @auth
            @if ($user->isAdmin)
                <h2>Настройки пользователя {{$user->name}}:</h2>

                <div class="panel panel-default">
                    <form action="{{route('admin.edit')}}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Email для уведомлений</td>
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <td>
                                    <input type="text" name="notification_email" value="{{$user->notification_email}}">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" value="сохранить">
                    </form>
                </div>
            @endif
        @endauth
    </div>
@endsection