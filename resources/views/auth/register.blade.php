<x-auth>
    <form action="#" method="post" class="auth__form">
        <h2 class="auth__title">Да пребудет с тобой сила!</h2>
        <p class="auth__name">Имя</p>
        <input type="text"
               class="auth__input"
               name="userName"
               placeholder="введите имя пользователя"/>
        {{--        <p className={styles.login__inputError}>{errorMessageEmail}</p>--}}
        <p class="auth__name">E-mail</p>
        <input type="text"
               class="auth__input"
               name="email"
               placeholder="введите е-mail"/>
        {{--        <p className={styles.login__inputError}>{errorMessageEmail}</p>--}}
        <p class="auth__name">Пароль</p>
        <input type="password"
               class="auth__input"
               name="password"
               placeholder="введите пароль"/>
        {{--        <p className={styles.login__inputError}>{errorMessagePassword}</p>--}}
        {{--        <p className={styles.login__error}>{currentError}</p>--}}
        <p class="auth__name">Подтвердите пароль</p>
        <input type="password"
               class="auth__input"
               name="confirmated-password"
               placeholder="повторите пароль"/>
        {{--        <p className={styles.login__inputError}>{errorMessagePassword}</p>--}}
        {{--        <p className={styles.login__error}>{currentError}</p>--}}
        <button type="submit"
                aria-label="submit"
                class="auth__submit"
                name="form_submit">
            Зарегистрироваться
        </button>
        <p class="auth__name">Уже зарегистрированы?&nbsp;
            <a class="auth__link" href='{{ 'login' }}'>Вход</a>
        </p>

        {{--        <Link className={styles.login__link} to='/resetpassword'>Забыли пароль?</Link>--}}
    </form>
</x-auth>


