<div x-data="{ open: false }" @click.away="open = false">
    <div @click="open =! open">
        {{ $trigger }}
    </div>

    <div class="bg-white rounded shadow-md py-2 mt-1 w-40" x-show="open">
        {{ $slot }}
    </div>
</div>