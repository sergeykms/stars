<x-layout>
    <x-elements.title>Список пользователей</x-elements.title>
    <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around; gap: 20px;">

        @foreach( $users as $user)
            <x-elements.card_user :user='$user'/>
        @endforeach

    </div>
</x-layout>
