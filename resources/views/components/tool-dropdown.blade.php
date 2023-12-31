<div data-dropdown class="relative" x-data="{ open:false }" data-index={{ $index }}>
    <button
        x-on:click="open = ! open"
        type="button" 
        class="flex items-center gap-1.5 p-4 pb-2"
    >
    <span class="text-xl w-5 h-5">
        <template x-if="project.tools[{{ $index }}]">
            <span x-html="project.tools[{{ $index }}].icon"></span>
        </template>
    </span>
        <i class="fa-solid fa-chevron-down text-xs"></i>
    </button>
    <ul
        x-show="open" x-transition @click.outside="open = false"
        class="absolute z-20 bg-white flex flex-col gap-2 shadow-md max-h-72 overflow-scroll"
    >
        {{-- This first tool is for empty tool --}}
        <li class="w-full">
            <button
                class="hover:bg-light whitespace-nowrap w-full py-2 px-4 transition-colors text-left"
                x-on:click="open = ! open, emptyTool({{ $index }})"
                type="button"
                >
                <i class="fa-solid fa-ban text-xl mr-1.5"></i>
                Empty
            </button>
        </li>
        <template x-for="tool in filteredTools">
            <x-tool-item :$index />
        </template>
    </ul>
    <template x-if="project.tools[{{ $index }}]">
        <input class="hidden" name="tools[]" x-bind:value="project.tools[{{ $index }}].id">
    </template>
</div>