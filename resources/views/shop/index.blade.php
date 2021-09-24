@extends('layouts.default')

@section('content')
<div class="content-head__container">
    <div class="content-head__title-wrap">
        <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
    </div>
    <div class="content-head__search-block">
        <div class="search-container">
            <form class="search-container__form">
                <input type="text" class="search-container__form__input" />
                <button class="search-container__form__btn">search</button>
            </form>
        </div>
    </div>
</div>
<div class="content-main__container">
    @auth
        @if ($user->isAdmin)
        <a href="{{route('games.create')}}">Добавить игры</a>
        @endif
    @endauth
    <div class="products-columns">
        @foreach($games as $game)
            <div class="products-columns__item">
                <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">{{$game->name}}</a></div>
                <div class="products-columns__item__thumbnail">
                    <a href="/catalog/{{$game->category->name}}/{{$game->name}}" class="products-columns__item__thumbnail__link"><img src="/img/cover/game-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img" /></a>
                </div>
                <div class="products-columns__item__description">
                    <span class="products-price">{{$game->price}} руб</span>
                    <a href="/orders/create/{{$game->id}}" class="btn btn-blue">Купить</a>
                </div>
                @auth
                    @if ($user->isAdmin)
                    <a href="/game/edit/{{$game->id}}">Отредактировать</a>
                    <a href="/game/delete/{{$game->id}}">Удалить</a>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
</div>
<div class="content-footer__container">
    {{$games->links('vendor.pagination.bootstrap-4')}}
</div>
@endsection