<div class="home">
    <div class="home__sidebar">
        <x-layout.sidebar/>
    </div>

    <div style="grid-row: 1/2; grid-column: 2/3">
        {{ $slot }}
{{--        <x-elements.title>Пользователь авторизован</x-elements.title>--}}
    </div>
</div>

