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
    @auth<a href="{{route('games.create')}}">Добавить игры</a>@endauth
    <div class="products-columns">
        @foreach($games as $game)
            <div class="products-columns__item">
                <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">{{$game->name}}</a></div>
                <div class="products-columns__item__thumbnail">
                    <a href="/catalog/{{$game->category->name}}/{{$game->name}}" class="products-columns__item__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img" /></a>
                </div>
                <div class="products-columns__item__description">
                    <span class="products-price">{{$game->price}} руб</span>
                    <a href="#" class="btn btn-blue">Купить</a>
                </div>
                @auth
                    <a href="/game/edit/{{$game->id}}">Отредактировать</a>
                    <a href="/game/delete/{{$game->id}}">Удалить</a>
                @endauth
            </div>
        @endforeach
    </div>
</div>
<div class="content-footer__container">
    <ul class="page-nav">
        <li class="page-nav__item">
            <a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a>
        </li>
        <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
        <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
        <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
        <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
        <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
        <li class="page-nav__item">
            <a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a>
        </li>
    </ul>
</div>
@endsection