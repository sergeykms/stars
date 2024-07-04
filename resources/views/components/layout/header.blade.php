<nav class="header">
    <a class="navbar-brand" href="{{ route('main-menu') }}">
        <img src="{{ asset('../../../images/logo-light.svg') }}"
             class="header__logo"
             alt="Логотип">
    </a>

    @auth()
        <div class="dropdown header__user">
            <p class="header__user-name">{{ auth() -> user() -> name }}</p>
            <img src="{{ asset('../../../images/user-circle-light.svg') }}"
                 class="header__user-pic dropdown-toggle"
                 alt="Пользователь"
                 id="dropdownMenuLink"
                 data-bs-toggle="dropdown">

            <ul class="dropdown-menu header__user-menu" aria-labelledby="dropdownMenuLink">
                <li><p class="mb-0 dropdown-item header__user-menu-item" href="#">Авторизован как</p></li>
                <li>
                    <p class="mb-0 dropdown-item header__user-menu-item header__user-menu-item_bold">{{ auth() -> user() -> email }}</p>
                </li>
                <li>
                    <hr class="header__user-menu-divider">
                </li>
                <li><a class="dropdown-item header__user-menu-item" href="{{ route('settings') }}">Страница
                        пользователя</a></li>
                <li><a class="dropdown-item header__user-menu-item" href="{{ route ('admin') }}">Админ. панель</a></li>
                <li>
                    <hr class="header__user-menu-divider">
                </li>
                <li>
                    <form action="{{ route('logout') }} " method="post">
                        @csrf
                        <button class="dropdown-item header__user-menu-item" type="submit">
                            Выход
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    @endauth

    @guest()
        <div class="header__user">
            @php
                $isActive = request()->is('login');
            @endphp
            <a href="{{ route('login') }}" @class([
                'header__link header__link_active' => $isActive,
                'header__link' => !$isActive,
            ])>
                Вход
            </a>
            @php
                $isActive = request()->is('register');
            @endphp
            <a href="{{ route('register') }}" @class([
                'header__link header__link_active' => $isActive,
                'header__link' => !$isActive,
            ])>
                Регистрация
            </a>
        </div>
    @endguest

</nav>

