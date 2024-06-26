<x-layout>

    <div class="auth">
        {{ $slot }}
        <div class="auth__image">
            <img src="{{ asset('../../../images/login_1.png') }}" alt="" class="auth__top-image"/>
            <img src="{{ asset('../../../images/login_2.png') }}" alt="" class="auth__bottom-image"/>
        </div>
    </div>

</x-layout>




