<x-layout>
    <x-elements.title>Список пользователей</x-elements.title>
    <div class="user-list">

        @foreach( $users as $user)
            <x-elements.card_user :user='$user'/>
        @endforeach

    </div>
</x-layout>
