<div class="top-0 right-0 left-0 w-full  fixed backdrop-blur-lg z-[999]">

    <div class="flex justify-between items-center lg:px-11 px-6  p-6 text-white">
        <div class="items-center text-2xl font-semibold">
            <div class="flex">
                <h1>
                    Zi <span class="text-violet-700 -mx-1">C</span> asts
                </h1>
                <i data-feather="zap" class="rotate-12 mt-1 text-orange-500"></i>
            </div>
        </div>
        {{-- center --}}

        <ul class=" lg:flex hidden gap-6 mt-3 uppercase items-center" id="menu">
            <li><a href="/forums">forum</a></li>
            <li><a href="/forums">Ngobs</a></li>
        </ul>
        {{-- center --}}
        <div class="flex gap-6 lg:hidden relative">
            <button id="btn"
                class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                <i data-feather="search" class="scale-90"></i>
            </button>
            <button class="block" id="burger">
                <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
                <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
                <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
            </button>
            <div id="navMenu"
                class="absolute scale-0 w-36 bg-slate-700 shadow-lg  rounded-lg rounded-tr-none top-12 right-4 transition-all duration-300 z-[999]">
                <ul class="p-2 text-sm gap-6 space-y-2 mt-2 capitalize items-center">
                    {{-- <li><a href="#" class="mb-2 mx-2 block">forum</a></li> --}}
                    <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                        <i data-feather="briefcase" width="0.9rem"></i>
                        <a href="/forums" class="mb-3 items-center mx-2 block">Forum</a>
                    </li>
                    <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                        <i data-feather="coffee" width="0.9rem"></i>
                        <a href="/forums" class="mb-3 items-center mx-2 block">Ngobs</a>
                    </li>

                </ul>
            </div>
        </div>

        <ul class="lg:flex hidden items-center justify-center gap-6">
            <div>
                <button id="btn2"
                    class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                    <i data-feather="search" class="scale-90"></i>
                </button>
            </div>
            <li><a href="#" class="font-semibold">Login</a></li>
        </ul>
    </div>
</div>
<div id="bg" style="opacity: 1"
    class="hidden transition-all duration-300 w-full bg-slate-900/60 backdrop-blur-sm min-h-screen fixed top-0 right-0 left-0 opacity-75 z-[9999]">
    <div id="fsc"
        class=" absolute top-8 right-6 left-6 mx-auto max-w-md bg-slate-700 p-3 py-4 rounded-lg z-[9999] text-white">
        <form class="relative w-full z-[99999]" id="form">

            <input type="text" name="" id="ipt"
                class="w-full   rounded-full text-slate-200 bg-slate-800  focus:ring-cyan-400 focus:ring-2 duration-200 transition-all border-none outline-none "
                placeholder="press / anywhere">
            <button type="submit" class="absolute right-3 bg-slate-800 top-2">
                {{-- <div class="hidden">kirim</div> --}}
                <i data-feather="search" class="scale-90"></i>

            </button>
        </form>
    </div>
</div>
