<div x-data="{ create: false }">


    <button id="btnCreate" @click="create = ! create"
        class="p-2 px-4 cursor-pointer rounded-full shadow-lg w-[6.7rem] text-new bg-primary flex active:bg-secondary transition-all duration-300">
        Create
        <i data-feather="plus" width='18' class="ml-2"></i>
    </button>
    {{-- <div x-show="create"> --}}

    @include('components.modal.Modal-create')
    {{-- </div> --}}

</div>
