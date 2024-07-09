<x-layout>
    <x-home>
        <div class="film">
            <x-elements.title>Показ фильма</x-elements.title>
            <a class="btn btn-primary app__button" href="{{ route('films.edit', $film->id) }}">Редактировать</a>

            <div class="row g-3">
                <p><span>Наименование: </span>{{ $film->name }}</p>
                <p><span>Цикл: </span>{{ $film->cycle }}</p>
                <p><span>Эпизод: </span>{{ $film->episode }}</p>
                <p><span>Краткое содержание: </span>{{ $film->description }}</p>
                <p><span>Режиссер: </span>{{ $film->director }}</p>
                <p><span>Музыка: </span>{{ $film->music }}</p>
                <p><span>Продюсер: </span>{{ $film->producer }}</p>
                <p><span>Сценарий: </span>{{ $film->script }}</p>
                <p><span>Бюджет: </span>{{ $film->budget }}</p>
                <p><span>Продолжительность, мин.: </span>{{ $film->timing }}</p>
                <p><span>Дата выхода: </span>{{ $film->release_date }}</p>
                <h2>История создания: </h2>
                @php
                    $film_about = explode("\n", $film->about);
                    foreach ($film_about as $about) {
                        echo "<p>$about</p>";
                    }
                @endphp
                <h2>Краткое содержание: </h2>
                @php
                    $film_content = explode("\n", $film->content);
                    foreach ($film_content as $content) {
                        echo "<p>$content</p>";
                    }
                @endphp
            </div>
        </div>
    </x-home>
</x-layout>
