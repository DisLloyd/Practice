@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full rounded-lg border-neutral-300 text-sm text-neutral-900 shadow-sm focus:border-neutral-900 focus:ring-neutral-900']) }}>
