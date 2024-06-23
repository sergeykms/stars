<x-auth>
    <form action="#" method="post" class="auth__form">
        <h2 class="auth__title">Да пребудет с тобой сила!</h2>
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
        <button type="submit"
                aria-label="submit"
                class="auth__submit"
                {{--                className={isValid ? `${styles.login__submit}`--}}
                {{--                : `${styles.login__submit} ${styles.login__submit_disabled}`}--}}
                {{--                disabled={!isValid}--}}
                name="form_submit">
            Войти
        </button>
        <p class="auth__name">Ещё не зарегистрированы?&nbsp;
            <a class="auth__link" href='{{ 'register' }}'>Регистрация</a>
        </p>

        {{--        <Link className={styles.login__link} to='/resetpassword'>Забыли пароль?</Link>--}}
    </form>
</x-auth>






