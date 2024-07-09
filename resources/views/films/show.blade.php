<x-layout>
    <x-home>
        <div class="film">
            <x-elements.title>Показ фильма</x-elements.title>
            <a class="btn btn-primary app__button" href="{{ route('films.edit', $film->id) }}">Редактировать</a>
        </div>
    </x-home>
</x-layout>
