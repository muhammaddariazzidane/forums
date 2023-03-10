<div x-data="{ showBar: false }">
    <nav class="top-0 right-0 left-0 w-full  fixed  z-[999]" :class="{ 'backdrop-blur-lg shadow-lg ': showBar }"
        @scroll.window="showBar = (window.pageYOffset > 15) ? true :false">

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
                <li><a href="/" data-turbolinks-action="replace"
                        class="{{ Request::is('/') ? 'active' : '' }}">forum
                    </a>
                </li>
                <li><a href="/chats" class="{{ Request::is('chats') ? 'active' : '' }}" data-turbolinks="true"
                        data-turbolinks-action="replace">Ngobs</a>
                </li>
            </ul>
            {{-- center --}}
            <div class="flex gap-6 lg:hidden relative">
                <div x-data="{ open: false }">
                    <button id="btn" @click="open = ! open"
                        class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                        <i data-feather="search" class="scale-90"></i>
                    </button>
                    @include('components.modal.Modal-search')

                </div>
                <div x-data="{ menu: false }">

                    <button class="block" id="burger" @click="menu = ! menu">
                        <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
                        <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
                        <span class="my-2 block h-[2px] w-[30px] bg-slate-200"></span>
                    </button>
                    <div id="navMenu" x-show="menu" x-transition.duration.500ms
                        class="absolute  w-36 bg-slate-700 shadow-lg  rounded-lg rounded-tr-none top-12 right-4 transition-all duration-300 z-[999]">
                        <ul class="p-2 text-sm gap-6 space-y-2 mt-2 capitalize items-center">

                            <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                                <i data-feather="briefcase" width="0.9rem"></i>
                                <a href="/" class="mb-3 items-center mx-2 block"
                                    data-turbolinks-action="replace">Forum</a>
                            </li>
                            <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                                <i data-feather="coffee" width="0.9rem"></i>
                                <a href="/chats" class="mb-3 items-center mx-2 block"
                                    data-turbolinks-action="replace">Ngobs</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <ul class="lg:flex hidden items-center justify-center gap-6">
                <div x-data="{ open: false }">
                    <button id="btnSecond" @click="open = ! open"
                        class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                        <i data-feather="search" class="scale-90"></i>
                    </button>
                    @include('components.modal.Modal-search')
                </div>
                @auth
                    <form class="cursor-pointer" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" {{-- <x-dropdown-link :href="route('logout')" --}}
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                            {{-- </x-dropdown-link> --}}
                        </a>
                    </form>
                @else
                    <li><a href="{{ route('login') }}" class="font-semibold" data-turbolinks-action="replace">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
