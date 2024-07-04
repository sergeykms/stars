<x-layout>
    <x-home>
        <x-elements.title>Добавление нового фильма</x-elements.title>

        <form class="row g-3 container" method="POST" action="{{ route('films') }}">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Наименование</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-6">
                <label for="episode" class="form-label">Эпизод</label>
                <input type="text" class="form-control" id="episode" name="episode">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Краткое содержание</label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
            </div>
            <div class="col-md-6">
                <label for="director" class="form-label">Режиссер</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="col-md-6">
                <label for="music" class="form-label">Музыка</label>
                <input type="text" class="form-control" id="music" name="music">
            </div>
            <div class="col-md-6">
                <label for="producer" class="form-label">Продюсер</label>
                <input type="text" class="form-control" id="producer" name="producer">
            </div>
            <div class="col-md-6">
                <label for="script" class="form-label">Сценарий</label>
                <input type="text" class="form-control" id="script" name="script">
            </div>
            <div class="col-md-6">
                <label for="budget" class="form-label">Бюджет</label>
                <input type="number" class="form-control" id="budget" name="budget">
            </div>
            <div class="col-md-6">
                <label for="timing" class="form-label">Продолжительность, мин.</label>
                <input type="number" class="form-control" id="timing" name="timing">
            </div>
            <div class="col-md-6">
                <label for="release_date" class="form-label">Дата выхода</label>
                <input type="date" class="form-control" id="release_date" name="release_date">
            </div>
            <div class="col-12">
                <label for="avatar" class="form-label">Изображение большое</label>
                <input type="text" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="col-12">
                <label for="avatar_min" class="form-label">Изображение маленькое</label>
                <input type="text" class="form-control" id="avatar_min" name="avatar_min">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </x-home>
</x-layout>
