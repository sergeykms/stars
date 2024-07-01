<x-layout>
    <x-home>
        <x-elements.title>Фильмы</x-elements.title>
        Режиссер {{ $director }} год {{ $year }}
        <ul>
            @foreach($films as $film)
                <li>
                    {{ $film }}
                </li>
            @endforeach
        </ul>

    </x-home>
</x-layout>
