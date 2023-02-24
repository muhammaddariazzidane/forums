<form class="lg:max-w-[14rem] shadow-lg w-full">
    <div class="text-new flex">
        <div class="mt-0 -mr-2 rounded-l-full bg-primary p-2">
            {{-- <i data-feather="search" width='18'></i> --}}
            <i class="fas fa-search mx-1 text-[16px] "></i>

        </div>
        <input type="text" placeholder="cari"
            class="bg-primary w-full focus:placeholder:text-new/60 placeholder:text-new rounded-r-full p-2 border-none focus:ring-0 text-new"
            name="search" id="" value="{{ request('search') }}">
    </div>
</form>
