<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Отредактировать категорию</div>
                <form action="{{route('categories.save', ['id' => $category->id])}}" method="post">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <td>Название</td>
                            <td>
                                <input type="text" name="name" value="{{$category->name}}">
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>
                                <textarea name="description">{{$category->description}}</textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="сохранить">
                </form>
            </div>
        </div>
    </div>
</div>