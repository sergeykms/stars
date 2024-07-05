 <x-auth>
        <form action="#" method="post" class="auth__form">
            @csrf
            <h2 class="auth__title">Да пребудет с тобой сила!</h2>
            @error('failed')
            <div class="alert alert-danger" role="alert"
                 style="font-size: 1rem; margin-top: 1rem; padding: .5rem; text-align: center">
                {{ $message }}
            </div>
            @enderror

            <p class="auth__name">E-mail</p>
            <input type="text"
                   class="auth__input @error('email') auth__input_error @enderror"
                   name="email"
                   value="{{ old( 'email') }}"
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

            <div class="auth_checkbox-area">
                <input class="auth_checkbox"
                       type="checkbox"
                       id="remember"
                       name="remember">
                <label class="auth_checkbox-label" for="remember">Запомни меня</label>
            </div>
            <button type="submit"
                    aria-label="submit"
                    class="app__button auth__submit">
                Войти
            </button>
            <p class="auth__name">Ещё не зарегистрированы?&nbsp;
                <a class="auth__link" href='{{ 'register' }}'>Регистрация</a>
            </p>
        </form>
    </x-auth>






