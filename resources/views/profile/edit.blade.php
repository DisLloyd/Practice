<x-layouts.app :title="'Your profile'">
    <div class="mx-auto max-w-2xl px-6 py-12 lg:px-8">
        <h1 class="mb-8 text-2xl font-semibold tracking-tight text-neutral-900">Profile</h1>

        <div class="space-y-6 rounded-2xl border border-neutral-200 p-6">
            <div>
                <h2 class="text-base font-semibold text-neutral-900">Profile information</h2>
                <p class="mt-1 text-sm text-neutral-500">Update your name and email address.</p>
            </div>

            <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
                @csrf
                @method('patch')

                <div>
                    <x-input-label for="name" value="Name" />
                    <x-text-input id="name" name="name" :value="old('name', $user->name)" required autofocus />
                    <x-input-error :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" type="email" name="email" :value="old('email', $user->email)" required />
                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <x-primary-button class="w-auto">Save</x-primary-button>
            </form>
        </div>

        <div class="mt-8 space-y-6 rounded-2xl border border-red-200 bg-red-50 p-6">
            <div>
                <h2 class="text-base font-semibold text-red-900">Delete account</h2>
                <p class="mt-1 text-sm text-red-700">
                    Once your account is deleted, all of its resources will be permanently removed.
                </p>
            </div>

            <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-5"
                  onsubmit="return confirm('Are you sure you want to delete your account?');">
                @csrf
                @method('delete')

                <div class="max-w-xs">
                    <x-input-label for="password" value="Confirm password" />
                    <x-text-input id="password" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password', 'userDeletion')" />
                </div>

                <button type="submit"
                        class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-red-500">
                    Delete account
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>
