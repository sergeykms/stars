<x-layout>
    <x-home>
        <x-elements.title>Фильмы</x-elements.title>
        <a class="btn btn-primary" href="{{ route('films.create') }}">Создать</a>
        <ul class="film-index">
            @foreach($films as $film)
                <a class="film-index__item">
                    <div class="film-index__menu">
                        <a href="{{ route('films.edit', $film->id) }}" class="film-index__menu-button">Edit</a>
                    </div>
                    <div class="film-index__image-container">
                        <img src="{{ asset('../../../images/stars.jpg') }}" alt="" class="film-index__image"/>
                        <div class="film-index__text-overlay"></div>
                        <p class="film-index__text-image">{{ $film->description }}</p>
                    </div>
                </a>
            @endforeach
        </ul>
    </x-home>
</x-layout>
