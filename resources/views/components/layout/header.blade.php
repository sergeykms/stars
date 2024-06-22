<nav class="header">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('../../../images/logo-light.svg') }}"
             class="header__logo"
             alt="Логотип">
    </a>

    <div class="dropdown header__user">
        <p class="header__user-name">Name</p>
        <img src="{{ asset('../../../images/user-circle-light.svg') }}"
             class="header__user-pic dropdown-toggle"
             alt="Пользователь"
             id="dropdownMenuLink"
             data-bs-toggle="dropdown">

        <ul class="dropdown-menu header__user-menu" aria-labelledby="dropdownMenuLink">
            <li><p class="mb-0 dropdown-item header__user-menu-item" href="#">Авторизован как</p></li>
            <li><p class="mb-0 dropdown-item header__user-menu-item header__user-menu-item_bold">user@me.com</p></li>
            <li><hr class="header__user-menu-divider"></li>
            <li><a class="dropdown-item header__user-menu-item" href="#">Страница пользователя</a></li>
            <li><a class="dropdown-item header__user-menu-item" href="#">Админ панель</a></li>
            <li><hr class="header__user-menu-divider"></li>
            <li><a class="dropdown-item header__user-menu-item" href="#">Выход</a></li>
        </ul>
    </div>

</nav>

