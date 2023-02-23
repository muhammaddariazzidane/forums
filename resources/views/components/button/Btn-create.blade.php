<div x-data="{ create: false }">


    <button id="btnCreate" @click="create = ! create"
        class="p-2 px-4 items-center cursor-pointer rounded-full shadow-lg w-[5.5rem] text-new bg-primary flex active:bg-secondary transition-all duration-300">
        Buat
        <i class="fas fa-plus text-[14px] ml-2"></i>
        {{-- <i data-feather="plus" width='18' class="ml-2"></i> --}}
    </button>
    {{-- <div x-show="create"> --}}

    @include('components.modal.Modal-create')
    {{-- </div> --}}

</div>
