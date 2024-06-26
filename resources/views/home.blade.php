<x-layout>
    @auth()
        <div class="home">
            <div class="home__sidebar">
                <x-layout.sidebar/>
            </div>

            <div style="grid-row: 1/2; grid-column: 2/3">
                <h1>Авторизрван</h1>
            </div>
        </div>


        {{--        <div class="layout__sidebar">--}}
        {{--            <x-layout.sidebar/>--}}
        {{--        </div>--}}
    @endauth


    @guest()
        <x-layout.greeting>
            <h1>Здравствуй гость</h1>
        </x-layout.greeting>
    @endguest

</x-layout>


