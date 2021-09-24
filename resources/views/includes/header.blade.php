<header class="main-header">
    <div class="logotype-container">
        <a href="/" class="logotype-link"><img src="{{asset('img/logo.png')}}" alt="Логотип" /></a>
    </div>
    <nav class="main-navigation">
        <ul class="nav-list">
            <li class="nav-list__item"><a href="/" class="nav-list__item__link">Главная</a></li>
            <li class="nav-list__item"><a href="/orders" class="nav-list__item__link">Мои заказы</a></li>
            <li class="nav-list__item"><a href="/news" class="nav-list__item__link">Новости</a></li>
            <li class="nav-list__item"><a href="/about" class="nav-list__item__link">О компании</a></li>
        </ul>
    </nav>
    <div class="header-contact">
        <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
    </div>
    <div class="header-container">
        <div class="payment-container">
            <div class="payment-basket__status">
                <div class="payment-basket__status__icon-block">
                    <a class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a>
                </div>
                <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">0</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
            </div>
        </div>
        <div class="authorization-block">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth <span>Вы вошли как: {{$user->name}}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                    @if ($user->isAdmin)
                    <a href="/admin">Редактировать</a>
                    @endif
            @else
                        <a href="{{ route('login') }}" class="authorization-block__link">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="authorization-block__link">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</header>