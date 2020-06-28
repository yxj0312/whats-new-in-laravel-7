@props(['name'])

<div x-data="{ 'name': '{{ $name }}', show: false}"
    x-show="false">
    {{ $slot }}
</div>