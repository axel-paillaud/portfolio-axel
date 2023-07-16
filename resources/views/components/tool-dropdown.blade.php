<div class="relative" x-data="{ open:false, toolId: '', toolClass:'fa-solid fa-ban' }">
    <button
        x-on:click="open = ! open"
        type="button" 
        class="flex items-center gap-1.5 p-4 pb-2"
    >
        <i x-bind:class="toolClass" class="text-xl"></i>
        <i class="fa-solid fa-chevron-down text-xs"></i>
    </button>
    <ul
        x-show="open" x-transition @click.outside="open = false"
        class="absolute z-20 bg-white flex flex-col gap-2 shadow-md"
    >
        {{-- This first tool is for empty selection, or select no tool --}}
        <li class=" hover:bg-light whitespace-nowrap w-full py-2 px-4 transition-colors">
            <button 
                x-on:click="toolId = '', open = ! open, toolClass = 'fa-solid fa-ban'"
                data-tools-id="" 
                type="button"
                >
                <i class="fa-solid fa-ban text-xl mr-1.5"></i>
                Empty
            </button>
        </li>
        @foreach($tools as $tool)
            <x-tool-item :$tool />
        @endforeach
    </ul>
    <input class="hidden" x-model="toolId">
</div>