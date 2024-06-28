<x-layout>
    <h1>Панель администратора</h1>
    <h2>Список пользователей</h2>
    <br/>
    <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around; gap: 20px;">

    @foreach( $users as $user)

            <div class="card" style="width: 300px">
                <div class="card-header">
                    {{ $user -> name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $user -> email }}</h5>
                    <p class="card-text">{{ $user -> created_at -> isoFormat('DD.MM.YYYY') }}</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

    @endforeach

    </div>
</x-layout>
