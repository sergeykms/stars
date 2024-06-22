<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>


<div class="register">
    <form action="#" method="post" class="register__form">
        <h2 class="register__title">Да пребудет с тобой сила!</h2>
        <p class="register__name">E-mail</p>
        <input type="text"
               class="register__input"
               name="email"
               placeholder="введите е-mail"/>
        {{--        <p className={styles.login__inputError}>{errorMessageEmail}</p>--}}
        <p class="register__name">Пароль</p>
        <input type="password"
               class="register__input"
               name="password"
               placeholder="введите пароль"/>
        {{--        <p className={styles.login__inputError}>{errorMessagePassword}</p>--}}
        {{--        <p className={styles.login__error}>{currentError}</p>--}}
        <button type="submit"
                aria-label="submit"
                class="register__submit"
                {{--                className={isValid ? `${styles.login__submit}`--}}
                {{--                : `${styles.login__submit} ${styles.login__submit_disabled}`}--}}
                {{--                disabled={!isValid}--}}
                name="form_submit">
            Зарегистрироваться
        </button>
        <p class="register__name">Уже зарегистрированы??&nbsp;
            <a class="register__link" href='{{ 'login' }}'>Вход</a>
        </p>

        {{--        <Link className={styles.login__link} to='/resetpassword'>Забыли пароль?</Link>--}}
    </form>

    <div class="register__image">
        <img src="{{ asset('../../../images/login_1.png') }}" alt="" class="register__top-image"/>
        <img src="{{ asset('../../../images/login_2.png') }}" alt="" class="register__bottom-image"/>
    </div>

</div>


</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>



