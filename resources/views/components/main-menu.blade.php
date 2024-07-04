<x-layout>
{{--    <x-elements.title>Главное меню</x-elements.title>--}}
    <div
        style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around; gap: 4rem; padding: 3rem; margin-top: 3rem">

        <x-elements.tile link="{{ route('films.index') }}" image="{{ asset('../../../images/main-menu/films-ico.png') }}">Фильмы</x-elements.tile>
        <x-elements.tile link="{{ route('planets.index') }}" image="{{ asset('../../../images/main-menu/planets-ico.png') }}">Планеты</x-elements.tile>
        <x-elements.tile link="{{ route('peoples.index') }}" image="{{ asset('../../../images/main-menu/people-ico.png') }}">Персонажи</x-elements.tile>
        <x-elements.tile link="{{ route('peoples.index') }}" image="{{ asset('../../../images/main-menu/species-ico.png') }}">Расы</x-elements.tile>
        <x-elements.tile link="{{ route('starships.index') }}" image="{{ asset('../../../images/main-menu/starship-ico.png') }}">Звездолеты</x-elements.tile>
        <x-elements.tile link="{{ route('vehicles.index') }}" image="{{ asset('../../../images/main-menu/vehicle-ico.png') }}">Транспорт</x-elements.tile>

{{--        <x-elements.tile link="{{ route('films.index') }}">Фильмы</x-elements.tile>--}}
{{--        <x-elements.tile link="{{ route('planets.index') }}">Планеты</x-elements.tile>--}}
{{--        <x-elements.tile link="{{ route('peoples.index') }}">Персонажи</x-elements.tile>--}}
{{--        <x-elements.tile link="{{ route('species.index') }}">Расы</x-elements.tile>--}}
{{--        <x-elements.tile link="{{ route('starships.index') }}">Звездолеты</x-elements.tile>--}}
{{--        <x-elements.tile link="{{ route('vehicles.index') }}">Транспорт</x-elements.tile>--}}

    </div>
</x-layout>
