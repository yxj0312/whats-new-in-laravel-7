@props(['active'])

<div x-data="{ 
    activeTab:'{{ $active }}', 
    tabHeadings: [],
    toggleTabs() {
        this.tabs.forEach(
            tab => tab.__x.$data.show = tab.__x.$data.name === this.activeTab
        );
    }
    }"
    x-init="() => {
        tabHeadings = [...$refs.tabs.children].map(tab => tab.__x.$data.name);
    }">
    <div>
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <button x-text="tab" @click="activeTab = tab"></button>
        </template>
    </div>
    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>