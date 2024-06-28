<nav class="header">
    <a class="navbar-brand" href="/">
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
                <li><a class="dropdown-item header__user-menu-item" href="{{ route('settings') }}">Страница пользователя</a></li>
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
{{--                        <a class="dropdown-item header__user-menu-item" href="{{ route('logout') }}">Выход</a>--}}
                    </form>
                </li>

            </ul>
        </div>
    @endauth

    @guest()
        <div class="header__user">
            <a class="header__button" href="{{ route('login') }}">Вход</a>
            <a class="header__button" href="{{ route('register') }}">Регистрация</a>
        </div>
    @endguest

</nav>

