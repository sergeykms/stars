<div class="sidebar__navigate">

    <x-elements.sidebar_link href="{{ route('films.index') }}" :active="request()->is('films')">
        Фильмы
    </x-elements.sidebar_link>

    <x-elements.sidebar_link href="{{ route('planets.index') }}" :active="request()->is('planets')">
        Планеты
    </x-elements.sidebar_link>

    <x-elements.sidebar_link href="{{ route('peoples.index') }}" :active="request()->is('peoples')">
        Персонажи
    </x-elements.sidebar_link>

    <x-elements.sidebar_link href="{{ route('species.index') }}" :active="request()->is('species')">
        Расы
    </x-elements.sidebar_link>

    <x-elements.sidebar_link href="{{ route('starships.index') }}" :active="request()->is('starships')">
        Звездолеты
    </x-elements.sidebar_link>

    <x-elements.sidebar_link href="{{ route('vehicles.index') }}" :active="request()->is('vehicles')">
        Транспорт
    </x-elements.sidebar_link>

</div>

