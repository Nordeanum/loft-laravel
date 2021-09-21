<!DOCTYPE html>
<html lang="ru">
<head>
    @include('includes.head')
</head>
<body>
<div class="main-wrapper">
    @include('includes.header')
    <div class="middle">
        <div class="sidebar">
            <div class="sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="sidebar-category">
                        @foreach($categories as $category)
                            <li class="sidebar-category__item"><a href="/catalog/{{$category->name}}" class="sidebar-category__item__link">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item__title">Последние новости</div>
                <div class="sidebar-item__content">
                    <div class="sidebar-news">
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{asset('img/cover/game-2.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image" /></div>
                            <div class="sidebar-news__item__title-news"><a href="/new" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{asset('img/cover/game-1.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image" /></div>
                            <div class="sidebar-news__item__title-news"><a href="/new" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{asset('img/cover/game-4.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image" /></div>
                            <div class="sidebar-news__item__title-news"><a href="/new" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="{{asset('img/slider.png')}}" alt="Image" class="image-main" /></div>
            </div>
            <div class="content-middle">
                @yield('content')
            </div>
            <div class="content-bottom"></div>
        </div>
    </div>
    @include('includes.footer')
</div>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
