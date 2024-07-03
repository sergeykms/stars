<x-layout>
    <x-home>
        <x-elements.title>Редактирование фильма</x-elements.title>
        <form class="row g-3 container" method="POST" action="{{ route('films.update', $film->id) }}">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="name" class="form-label">Наименование</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $film->name) }}">
            </div>
            <div class="col-md-6">
                <label for="episode" class="form-label">Эпизод</label>
                <input type="text" class="form-control" id="episode" name="episode" value="{{ old('episode', $film->episode) }}">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Краткое содержание</label>
                <textarea class="form-control" name="description" id="description" rows="4">{{ old('description', $film->description) }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="director" class="form-label">Режиссер</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director', $film->director) }}">
            </div>
            <div class="col-md-6">
                <label for="music" class="form-label">Музыка</label>
                <input type="text" class="form-control" id="music" name="music" value="{{ old('music', $film->music) }}">
            </div>
            <div class="col-md-6">
                <label for="producer" class="form-label">Продюсер</label>
                <input type="text" class="form-control" id="producer" name="producer" value="{{ old('producer', $film->producer) }}">
            </div>
            <div class="col-md-6">
                <label for="script" class="form-label">Сценарий</label>
                <input type="text" class="form-control" id="script" name="script" value="{{ old('script', $film->script) }}">
            </div>
            <div class="col-md-6">
                <label for="budget" class="form-label">Бюджет</label>
                <input type="number" class="form-control" id="budget" name="budget" value="{{ old('budget', $film->budget) }}">
            </div>
            <div class="col-md-6">
                <label for="timing" class="form-label">Продолжительность, мин.</label>
                <input type="number" class="form-control" id="timing" name="timing" value="{{ old('timing', $film->timing) }}">
            </div>
            <div class="col-md-6">
                <label for="release_date" class="form-label">Дата выхода</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date', $film->release_date) }}">
            </div>
            <div class="col-12">
                <label for="avatar" class="form-label">Изображение большое</label>
                <input type="text" class="form-control" id="avatar" name="avatar" value="{{ old('avatar', $film->avatar) }}">
            </div>
            <div class="col-12">
                <label for="avatar_min" class="form-label">Изображение маленькое</label>
                <input type="text" class="form-control" id="avatar_min" name="avatar_min" value="{{ old('avatar_min', $film->avatar_min) }}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Обновить</button>
            </div>
        </form>

    </x-home>
</x-layout>
