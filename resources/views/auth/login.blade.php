<x-auth>
    <form action="#" method="post" class="auth__form">
        @csrf
        <h2 class="auth__title">Да пребудет с тобой сила!</h2>
        <p class="auth__name">E-mail</p>
        <input type="text"
               class="auth__input @error('email') auth__input_error @enderror"
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

        <div class= "auth_checkbox-area">
            <input class = "auth_checkbox" type="checkbox" id="remember" checked>
            <label class="auth_checkbox-label" for="remember">Запомни меня</label>
        </div>
        <button type="submit"
                aria-label="submit"
                class="auth__submit">
            Войти
        </button>
        <p class="auth__name">Ещё не зарегистрированы?&nbsp;
            <a class="auth__link" href='{{ 'register' }}'>Регистрация</a>
        </p>

        {{--        <Link className={styles.login__link} to='/resetpassword'>Забыли пароль?</Link>--}}
    </form>

{{--    <div class = "checkboxArea">--}}
{{--        <input type="checkbox" class = "checkbox" id={inputName}--}}
{{--               name="remember"--}}
{{--               checked--}}
{{--        />--}}
{{--        <label htmlFor={inputName}></label>--}}
{{--    </div>--}}



</x-auth>






