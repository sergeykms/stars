<div class="layout">

    <div class="layout__header">
        <x-layout.header/>
    </div>

    <div class="layout__sidebar">
        <x-layout.sidebar/>
    </div>

    <x-layout.main>
        @auth()
            <h1>Авторизован</h1>
        @endauth

        @guest()
            <h1>Гость</h1>
        @endguest
    </x-layout.main>

    <div class="layout__footer">
        <x-layout.footer/>
    </div>

</div>
