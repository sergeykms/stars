<x-auth>
    <form action="{{ route('register') }}" method="post" class="auth__form">
        @csrf
        <h2 class="auth__title">Да пребудет с тобой сила!</h2>
        <p class="auth__name">Имя</p>
        <input type="text"
               class="auth__input @error('name') auth__input_error @enderror"
               value="{{ old( 'name') }}"
               name="name"
               placeholder="введите имя пользователя"/>
        @error('name')
        <p class="auth__input-error">{{ $message }}</p>
        @enderror
        <p class="auth__name">E-mail</p>
        <input type="text"
               class="auth__input @error('email') auth__input_error @enderror"
               value="{{ old( 'email') }}"
               name="email"
               placeholder="введите е-mail"/>
        @error('email')
        <p class="auth__input-error">{{ $message }}</p>
        @enderror
        <p class="auth__name">Пароль</p>
        <input type="password"
               class="auth__input @error('password') auth__input_error @enderror"
               name="password"
               placeholder="введите пароль"/>
        @error('password')
        <p class="auth__input-error">{{ $message }}</p>
        @enderror
        <p class="auth__name">Подтвердите пароль</p>
        <input type="password"
               class="auth__input @error('password') auth__input_error @enderror"
               name="password_confirmation"
               placeholder="повторите пароль"/>
        <button type="submit"
                aria-label="submit"
                class="auth__submit">
            Зарегистрироваться
        </button>
        <p class="auth__name">Уже зарегистрированы?&nbsp;
            <a class="auth__link" href='{{ 'login' }}'>Вход</a>
        </p>

        {{--        <Link className={styles.login__link} to='/resetpassword'>Забыли пароль?</Link>--}}
    </form>
</x-auth>


