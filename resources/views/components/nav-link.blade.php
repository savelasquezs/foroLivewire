@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-white/90 focus:outline-none focus:border-blue-600 transition duration-150 ease-in-out'
            : 'inline-flex uppercase px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-600 hover:text-white hover:border-blue-600  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
