@props(['name'])

<div x-data="{ 'name': '{{ $name }}'}">
    {{ $slot }}
</div>