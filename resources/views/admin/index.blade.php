<x-layout>
    <x-elements.title>Панель администратора</x-elements.title>

    <div class="admin">

        <x-elements.tile link="{{route('users_list')}}"
                         image="{{ asset('../../images/main-menu/people-ico.png') }}">Пользователи
        </x-elements.tile>

    </div>

</x-layout>

