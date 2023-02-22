<div id="bg" :style="open ? { opacity: 1 } : { opacity: 0 }"
    class=" transition-all duration-300 w-full bg-slate-900/60 backdrop-blur-sm min-h-screen fixed top-0 right-0 left-0 opacity-75 "
    :class="open ? 'z-[9999]' : 'hidden'">
    <div x-show="open" x-transition.duration.300ms @click.outside="open = false">

        <div id="fsc" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class=" absolute top-8 right-6 left-6 mx-auto max-w-md bg-slate-700 p-3 py-4 rounded-lg z-[9999] text-white">
            <form class="relative w-full z-[99999]" id="form">

                <input type="text" name=""
                    class="w-full   rounded-full text-slate-200 bg-slate-800  focus:ring-cyan-400 focus:ring-2 duration-200 transition-all border-none outline-none "
                    placeholder="press / anywhere">
                <button type="submit" class="absolute right-3 bg-slate-800 top-2">
                    {{-- <div class="hidden">kirim</div> --}}
                    <i data-feather="search" class="scale-90"></i>

                </button>
            </form>
        </div>
    </div>
</div>
