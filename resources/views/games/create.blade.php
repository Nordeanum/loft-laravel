<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавить игру</div>
                <form action="{{route('games.add')}}" method="post">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <td>Название игры</td>
                            <td>
                                <input type="text" name="name">
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>ID категории</td>
                            <td>
                                <input type="text" name="category_id">
                                @if ($errors->has('category_id'))
                                    <div class="alert alert-danger">{{$errors->first('category_id')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>
                                <input type="text" name="price">
                                @if ($errors->has('price'))
                                    <div class="alert alert-danger">{{$errors->first('price')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>
                                <textarea name="description"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="создать">
                </form>
            </div>
        </div>
    </div>
</div>