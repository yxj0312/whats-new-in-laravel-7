<div x-data="{ tabHeadings: [] }"
    x-init="() => {
        tabHeadings = [...$refs.tabs.children].map(tab => tab.__x.$data.name);
    }">
    <div>
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <button x-text="tab"></button>
        </template>
    </div>
    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>