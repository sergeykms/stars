<x-layout>
    <x-home>
        <x-elements.title>Показ фильма</x-elements.title>
        <a class="btn btn-primary app__button" href="{{ route('films.edit', $film->id) }}">Редактировать</a>

    </x-home>
</x-layout>
