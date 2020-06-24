@props(['route'])

@php
    $classes = Request::routeIs($route) ? 'bg-blue-500' : '' 
@endphp

<a 
   {{ $attributes->merge(['class' => "block p-2 rounded " . $classes]) }}
   href="{{ route($route) }}">
    {{ $slot }}
</a>

