<x-layouts.guest :title="'Forgot password'">
    <h1 class="mb-2 text-xl font-semibold tracking-tight text-neutral-900">Forgot your password?</h1>
    <p class="mb-6 text-sm text-neutral-500">
        Enter your email and we'll send you a reset link.
    </p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <x-primary-button>Email reset link</x-primary-button>
    </form>
</x-layouts.guest>
