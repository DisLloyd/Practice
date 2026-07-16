<header class="border-b border-neutral-200">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-neutral-900">
            Store
        </a>

        <div class="flex items-center gap-6 text-sm font-medium">
            @auth
                <a href="{{ route('profile.edit') }}" class="text-neutral-600 transition hover:text-neutral-900">
                    {{ Auth::user()->name }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-neutral-600 transition hover:text-neutral-900">
                        Log out
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-neutral-600 transition hover:text-neutral-900">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                   class="rounded-full bg-neutral-900 px-4 py-2 text-white transition hover:bg-neutral-700">
                    Sign up
                </a>
            @endauth
        </div>
    </nav>
</header>
