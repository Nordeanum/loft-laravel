<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Отредактировать игру</div>
                <form action="{{route('games.save', ['id' => $game->id])}}" method="post">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <td>Название</td>
                            <td>
                                <input type="text" name="name" value="{{$game->name}}">
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>ID категории</td>
                            <td>
                                <input type="text" name="category_id" value="{{$game->category_id}}">
                                @if ($errors->has('category_id'))
                                    <div class="alert alert-danger">{{$errors->first('category_id')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>
                                <input type="text" name="price" value="{{$game->price}}">
                                @if ($errors->has('price'))
                                    <div class="alert alert-danger">{{$errors->first('price')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>
                                <textarea name="description">{{$game->description}}</textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="сохранить">
                </form>
            </div>
        </div>
    </div>
</div>