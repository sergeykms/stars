<x-layout>
    <x-home>
        <x-elements.title>Фильмы</x-elements.title>
        <a class="btn btn-primary app__button" href="{{ route('films.create') }}">Создать</a>

        <ul class="film-index">

            @foreach($films as $film)
                <li style="width: 35rem">
                    <a class="film-index__item">
                        <div class="film-index__menu">
                            <a href="{{ route('films.edit', $film->id) }}" class="film-index__menu-button">Edit</a>
                        </div>
                        <div class="film-index__image-container">
                            <img src="{{ asset('../../../images/stars.jpg') }}" alt="" class="film-index__image"
                                 style="padding: 0; margin: 0"/>
                            <div class="film-index__text-overlay" style="padding: 0; margin: 0"></div>
                            <div class="film-index__text-image" style="padding-right: 1rem">
                                <h3 style="margin: 0; padding: 0; font-family: var(--navigateFontFamily), Arial, sans-serif; font-size: 2rem; color: var(--backgroundColor); text-indent: 0">{{ $film->name }}</h3>
                                <p style="margin: 0; padding: 0; font-family: var(--navigateFontFamily), Arial, sans-serif; color: var(--backgroundCardColor); font-size: 1rem; line-height: 1.1rem; text-indent: 0">{{ $film->description }}</p>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
    </x-home>
</x-layout>
