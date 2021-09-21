@extends('layouts.default')

@section('content')
<div class="content-head__container">
    <div class="content-head__title-wrap">
        <div class="content-head__title-wrap__title bcg-title">Игры в разделе {{$current_category->name}}</div>
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
    <div class="products-category__list">
        @foreach($games as $game)
            <div class="products-category__list__item">
                <div class="products-category__list__item__title-product"><a href="/catalog/{{$current_category->name}}/{{$game->name}}">{{$game->name}}</a></div>
                <div class="products-category__list__item__thumbnail">
                    <a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-6.jpg" alt="Preview-image" /></a>
                </div>
                <div class="products-category__list__item__description"><span class="products-price">{{$game->price}} руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
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