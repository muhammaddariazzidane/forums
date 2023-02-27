<div id="bgCreate" :style="create ? { opacity: 1 } : { opacity: 0 }"
    class=" transition-all duration-300 w-full bg-slate-900/60 backdrop-blur-sm min-h-screen fixed top-0 right-0 left-0 opacity-75 "
    :class="create ? 'z-[9999]' : 'hidden'">
    <div x-show="create" x-transition.duration.300ms @click.outside="create = false">

        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class=" absolute lg:top-44 top-48  right-6 left-6 m-auto max-w-md bg-slate-800 p-3 px-4 py-4 rounded-xl z-[9999] text-white">
            <form class="relative w-full z-[99999]" action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="pb-6 text-center text-white text-xl font-semibold">
                    <h1>Buat Postingan</h1>
                </div>
                <textarea name="body"
                    class="w-full px-4 rounded-lg text-slate-200 bg-slate-900  focus:ring-cyan-400 focus:ring-2 duration-200 transition-all border-none outline-none "
                    placeholder="lorem ipsum"></textarea>
                <button type="submit"
                    class='py-[0.30rem] transition-all font-semibold duration-100 active:bg-slate-300 active:ring active:ring-cyan-400 bg-slate-400 float-right mt-4 text-black px-5 rounded-lg shadow'>
                    Buat
                </button>
            </form>
        </div>
    </div>
</div>
