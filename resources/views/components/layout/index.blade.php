<div class="layout">

    <div class="layout__header">
        <x-layout.header/>
    </div>

    @auth()
        <x-layout.main>
            <h1>Авторизован</h1>
        </x-layout.main>

        <div class="layout__sidebar">
            <x-layout.sidebar/>
        </div>
    @endauth


    @guest()
        <x-layout.greeting>
            <h1>Здравствуй гость</h1>
        </x-layout.greeting>
    @endguest


    <div class="layout__footer">
        <x-layout.footer/>
    </div>

</div>
