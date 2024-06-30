@props(['user' => '$user'])

<a class="card-user">
    <div class="card-user__head">
        {{ $user -> name }}
    </div>
    <h2 class="card-user__email">{{ $user -> email }}</h2>
    <div class="card-user__body">
        <div style="display: flex; flex-direction: row; gap: 1rem; margin-top: .5rem">
            <p class="card-user__title">Дата регистрации: </p>
            <p class="card-user__text">{{ $user -> created_at -> isoFormat('DD.MM.YYYY') }}</p>
        </div>
        <div style="display: flex; flex-direction: row; gap: 1rem; margin-top: .5rem">
            <p class="card-user__title">Статус: </p>
            <p class="card-user__text">{{ $user -> status }}</p>
        </div>
        <div style="display: flex; flex-direction: row; gap: 1rem; margin-top: .5rem">
            <p class="card-user__title">Роль: </p>
            <p class="card-user__text">{{ $user -> role }}</p>
        </div>
    </div>
</a>
