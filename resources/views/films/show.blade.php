<x-layout>
    <x-home>
        <div class="film">
            <x-elements.title>Показ фильма</x-elements.title>
            <a class="btn btn-primary app__button" href="{{ route('films.edit', $film->id) }}"
               style="margin-bottom: 1rem">Редактировать</a>

            <div class="row g-3">
                {{--                <x-elements.title>ggg</x-elements.title>--}}

                <x-elements.field_text :content="['Наименование: ', $film->name]"/>
                <x-elements.field_text :content="['Цикл: ', $film->cycle]"/>
                <x-elements.field_text :content="['Эпизод: ', $film->episode]"/>
                <x-elements.field_text :content="['Пролог: ', $film->description]"/>
                <x-elements.field_text :content="['Режиссер: ', $film->director]"/>
                <x-elements.field_text :content="['Музыка: ', $film->music]"/>
                <x-elements.field_text :content="['Продюсер: ', $film->producer]"/>
                <x-elements.field_text :content="['Сценарий: ', $film->script]"/>
                <x-elements.field_text :content="['Бюджет: ', $film->budget]"/>
                <x-elements.field_text :content="['Продолжительность, мин.: ', $film->timing]"/>
                <x-elements.field_text :content="['Дата выхода: ', $film->release_date]"/>
                <x-elements.field_text :content="['Бюджет: ', $film->budget]"/>
                <h2>История создания: </h2>
                @php
                    $film_about = explode("\n", $film->about);
                    foreach ($film_about as $about) {
                        if(strlen($about) > 50) {
                            echo "<p class='info__text'>$about</p>";
                        } else {
                            echo "<h3 class='info__subtitle'>$about</h3>";
                        }
                    }
                @endphp
                <h2>Краткое содержание: </h2>
                @php
                    $film_content = explode("\n", $film->content);
                    foreach ($film_content as $content) {
                        if(strlen($content) > 50) {
                            echo "<p class='info__text'>$content</p>";
                        } else {
                            echo "<h3 class='info__subtitle''>$content</h3>";
                        }
                    }
                @endphp
            </div>
        </div>
    </x-home>
</x-layout>
