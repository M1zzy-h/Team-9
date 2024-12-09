<div class="account-column">
    <h2>Register</h2>
    <x-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>
                <span>Username <span class="required">*</span></span>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </label>
        </div>

        <div>
            <label>
                <span>Email Address <span class="required">*</span></span>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </label>
        </div>

        <div>
            <label>
                <span>Phone <span class="required">*</span></span>
                <input type="number" name="phone" id="phone" class="account-input" :value="old('phone')" required autocomplete="phone">
            </label>
        </div>

        <div>
            <label>
                <span>Address <span class="required">*</span></span>
                <input type="text" name="address" id="address" class="account-input" :value="old('address')" required autocomplete="address">
            </label>
        </div>


        <div>
            <label>
                <span>Password <span class="required">*</span></span>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </label>
        </div>

        <div>
            <label>
                <span>Confirm Password <span class="required">*</span></span>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </label>
        </div>

        <p class="privacy-policy-text remember">
            <span>
            Your personal data will be used to support your experience throughout this website, to manage access to
            your account, and for other purposes described in our  <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>.
            </span>
            <x-button class="btn btn-sm">Register</x-button>
        </p>
    </form>
</div>
