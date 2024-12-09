<div class="account-column">
    <h2>Login</h2>
    <x-validation-errors class="mb-4" />

    @if(session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>
                <span>Email Address <span class="required">*</span></span>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </label>
        </div>

        <div>
            <label>
                <span>Password <span class="required">*</span></span>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </label>
        </div>

        <p class="remember">
            <label>
                <input type="checkbox" id="remember_me" name="remember" />
                <span>Remember Me</span>
            </label>
            <x-button class="btn btn-sm">Login</x-button>
        </p>

        @if(Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="form-link">Forgot your password?</a>
        @endif
    </form>
</div>

