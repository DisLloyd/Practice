<x-app-layout :title="'Store — Shop premium products'">
    <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8">
        <h1 class="text-4xl font-semibold tracking-tight text-neutral-900 sm:text-5xl">
            Products worth talking about.
        </h1>
        <p class="mx-auto mt-4 max-w-xl text-lg text-neutral-500">
            The storefront, cart, and checkout are coming in the next increments.
            Authentication and the database are ready.
        </p>
    </div>

    @if ($featured->isNotEmpty())
        <div class="mx-auto max-w-7xl px-6 pb-20 lg:px-8">
            <h2 class="mb-6 text-lg font-semibold text-neutral-900">Featured</h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ($featured as $product)
                    <div class="rounded-xl border border-neutral-200 p-4">
                        <p class="font-medium text-neutral-900">{{ $product->name }}</p>
                        <p class="mt-1 text-sm text-neutral-500">${{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</x-app-layout>
