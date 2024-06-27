<x-layout>
    @auth()
        <x-home/>
    @endauth

    @guest()
        Заставка
    @endguest
</x-layout>

