<x-layout>
    <x-home>
        <x-elements.title>Фильмы</x-elements.title>
        <a class="btn btn-primary app__button" href="{{ route('films.create') }}">Создать</a>

        <ul class="film-index">

            @foreach($films as $film)
                <li style="display: flex; flex-direction: column; flex-wrap: wrap; margin: 1rem; padding: 0; border: solid 1px var(--borderColor); max-width: 20rem;">
                    {{--                    <a style="margin: 1rem; padding: 0; cursor: pointer" href="{{ route('films.edit', $film->id) }}">--}}
                    <a style="padding: 0; cursor: pointer" href="{{ route('films.show', $film->id) }}">
                        <img src="{{ asset('../../../images/starwars-min.jpg') }}" alt=""
                             style="max-width: 20rem; margin: 0">
                    </a>
                    <p style="text-indent: 0; margin: 0; padding: .5rem; text-align: center; font-family: var(--navigateFontFamily), Arial, sans-serif; font-weight: 700; color: var(--appMainColor)">{{ $film->name }}</p>
                </li>

                {{--                <li style="max-width: 35rem">--}}
                {{--                    <a class="film-index__item">--}}
                {{--                        <div class="film-index__menu">--}}
                {{--                            <a href="{{ route('films.edit', $film->id) }}" class="film-index__menu-button">Edit</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="film-index__image-container">--}}
                {{--                            <img src="{{ asset('../../../images/stars.jpg') }}" alt="" class="film-index__image"--}}
                {{--                                 style="padding: 0; margin: 0"/>--}}
                {{--                            <div class="film-index__text-overlay" style="padding: 0; margin: 0"></div>--}}
                {{--                            <div class="film-index__text-image" style="padding-right: 1rem">--}}
                {{--                                <h3 style="margin: 0; padding: 0; font-family: var(--navigateFontFamily), Arial, sans-serif; font-size: 2rem; color: var(--backgroundColor); text-indent: 0">{{ $film->name }}</h3>--}}
                {{--                                <p style="margin: 0; padding: 0; font-family: var(--navigateFontFamily), Arial, sans-serif; color: var(--backgroundCardColor); font-size: 1rem; line-height: 1.1rem; text-indent: 0">{{ $film->description }}</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            @endforeach

        </ul>
    </x-home>
</x-layout>
