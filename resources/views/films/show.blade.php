<x-layout>
    <x-home>
        <div class="film">
            <x-elements.title>Показ фильма</x-elements.title>
            <a class="btn btn-primary app__button" href="{{ route('films.edit', $film->id) }}"
               style="margin-bottom: 1rem">Редактировать</a>
            <div class="row g-3">
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

                <x-elements.info_text id="filmAbout" head="История создания" :content='$film->about'/>
                <x-elements.info_text id="filmContent" head="Краткое содержание" :content='$film->content'/>

            </div>
        </div>
    </x-home>
</x-layout>
