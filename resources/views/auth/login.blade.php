<x-layouts.guest :title="'Log in'">
    <h1 class="mb-6 text-xl font-semibold tracking-tight text-neutral-900">Welcome back</h1>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="password" value="Password" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-neutral-600">
                <input type="checkbox" name="remember" class="rounded border-neutral-300 text-neutral-900 focus:ring-neutral-900">
                Remember me
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-neutral-500 hover:text-neutral-900">
                    Forgot password?
                </a>
            @endif
        </div>

        <x-primary-button>Log in</x-primary-button>
    </form>

    <p class="mt-6 text-center text-sm text-neutral-500">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-medium text-neutral-900 hover:underline">Sign up</a>
    </p>
</x-layouts.guest>
