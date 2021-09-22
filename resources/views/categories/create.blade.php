<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавить категорию</div>
                <form action="{{route('categories.add')}}" method="post">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <td>Название категории</td>
                            <td>
                                <input type="text" name="name">
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Описание категории</td>
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