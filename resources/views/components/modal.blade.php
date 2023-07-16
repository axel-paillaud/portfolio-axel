<dialog 
    id="{{ $id ?? '' }}"
    data-modal
    class="modal animate-zoomIn rounded-xl pb-10 px-12
    sm:pb-12 pt-12 sm:px-24 lg:pb-16 lg:px-40 fixed max-w-6xl sm:w-fit"
>
    <button 
        data-close-modal
        class="absolute left-0 top-0 rounded-full p-1 m-2 hover:bg-light transition-colors">
        <i class="fa-solid fa-xmark m-1"></i>
    </button>
    {{ $slot }}
</dialog>