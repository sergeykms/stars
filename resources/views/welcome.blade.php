<x-layout>
    @auth()
        <x-home>
            <x-elements.title>Авторизован</x-elements.title>
        </x-home>
    @endauth

    @guest()
        Заставка
    @endguest
</x-layout>

