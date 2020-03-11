{{-- <div {{ $attributes->merge(['class' => 'p-4']) }} > --}}
<div class="p-4 text-white {{ $type === 'success' ? 'bg-green-400' : 'bg-red-400' }}" >
    {{ $description }}
</div>