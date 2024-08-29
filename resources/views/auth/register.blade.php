<x-guest-layout>

    <div class="auth-full-page d-flex">
        <div class="auth-form p-3">

            <div class="text-center">
                <h1 class="h2">Get started</h1>
                <p class="text-small">
                    Start creating the best possible user experience for you customers.
                </p>
            </div>

            <div class="mt-2">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- First Name -->
                    <div>
                        <x-input-label for="firstname" :value="__('First Name')" />
                        <x-text-input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')"
                            required autofocus autocomplete="firstname" />
                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                    </div>

                    <!-- Middle Name -->
                    <div class="mt-2">
                        <x-input-label for="middlename" :value="__('Middle Name')" />
                        <x-text-input id="middlename" class="form-control" type="text" name="middlename" :value="old('middlename')"
                            required autofocus autocomplete="middlename" />
                        <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div class="mt-2">
                        <x-input-label for="lastname" :value="__('Last Name')" />
                        <x-text-input id="lastname" class="form-control" type="text" name="lastname" :value="old('lastname')"
                            required autofocus autocomplete="lastname" />
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-2">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-2">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-2">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-2">
                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class='btn btn-lg btn-primary'>Sign up</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="text-center mt-3">
                Already have an account? <a href="{{ route('login')}} ">Log In</a>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</x-guest-layout>
