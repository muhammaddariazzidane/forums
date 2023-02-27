<div x-data="{ showBar: false }">
    <nav class="top-0 right-0 left-0 w-full  fixed  z-[999]" :class="{ 'bg-primary shadow-lg ': showBar }"
        @scroll.window="showBar = (window.pageYOffset > 15) ? true :false">

        <div class="flex justify-between items-center lg:px-11 px-6  p-6 text-white">
            <div class="items-center text-2xl font-semibold">
                <div class="flex items-center">
                    <h1>
                        NgeBull
                    </h1>
                    <i class="fab fa-grunt ml-2 text-red-600 text-4xl"></i>
                    {{-- <i data-feather="zap" class="rotate-12 mt-1 text-orange-500"></i> --}}
                </div>
            </div>
            {{-- center --}}

            <ul class=" lg:flex hidden gap-6 mt-3 uppercase items-center" id="menu">
                <li><a href="/" data-turbolinks-action="replace"
                        class="{{ Request::is('/') ? 'active' : '' }}">forum
                    </a>
                </li>
                <li><a href="/chats" class="{{ Request::is('chats') ? 'active' : '' }}" data-turbolinks="true"
                        data-turbolinks-action="replace">Ngobrol</a>
                </li>
                @auth

                    <li><a href="/dashboard" data-turbolinks-action="replace">dashboard
                        </a>
                    </li>
                @endauth
            </ul>
            {{-- center --}}
            <div class="flex gap-6 lg:hidden relative">
                <div x-data="{ open: false }" {{ Request::is('chats') ? 'hidden' : '' }}>
                    <button name="navToggle" id="btn" @click="open = ! open"
                        class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                        {{-- <i data-feather="search" class="scale-90"></i> --}}
                        <i class="fas fa-search  text-lg mx-1 "></i>

                    </button>
                    @include('components.modal.Modal-search')

                </div>
                <div x-data="{ menu: false }">

                    <button class="block" id="burger" @click="menu = ! menu" @click.outside="menu = false">

                        <i class=" text-[2.2rem]" x-bind:class="menu ? 'fas fa-times ' : 'fas fa-bars'"></i>
                    </button>
                    <div id="navMenu" x-show="menu" x-transition.duration.500ms
                        class="absolute  w-36 bg-slate-700 shadow-lg  rounded-lg rounded-tr-none top-12 right-4 transition-all duration-300 z-[999]">
                        <ul class="p-2 text-sm gap-6 space-y-2 mt-2 capitalize items-center">
                            @auth

                                <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                                    <i class="fas fa-th text-[1.1rem]"></i>
                                    {{-- <i class="fas fa-columns "></i> --}}
                                    <a href="/dashboard" class="mb-3 items-center mx-2 block"
                                        data-turbolinks-action="replace">Dashboard</a>
                                </li>
                            @endauth
                            <li
                                class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500 {{ Request::is('/') ? 'text-cyan-400' : '' }}">
                                {{-- <i data-feather="briefcase" width="0.9rem"></i> --}}
                                <i class="fas fa-laptop-code text-[1.1rem]"></i>
                                <a href="/" class="mb-3 items-center mx-2 block"
                                    data-turbolinks-action="replace">Forum</a>
                            </li>
                            <li
                                class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500 {{ Request::is('chats') ? 'text-cyan-400' : '' }}">
                                {{-- <i data-feather="coffee" width="0.9rem"></i> --}}
                                <i class="fas fa-inbox text-[1.1rem]"></i>
                                <a href="/chats" class="mb-3 items-center mx-2 block"
                                    data-turbolinks-action="replace">Ngobrol</a>
                            </li>
                            @guest

                                <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                                    {{-- <i data-feather="log-in" width="0.9rem"></i> --}}
                                    <i class="fas fa-sign-in-alt text-[1.1rem]"></i>
                                    <a href="{{ route('login') }}" class="mb-3 items-center mx-2 block"
                                        data-turbolinks-action="replace">Login</a>
                                </li>

                            @endguest
                            @auth

                                <li class="flex ml-2 transition-all duration-300 hover:text-cyan-400 active:text-cyan-500">
                                    {{-- <i data-feather="log-out" width="0.9rem"></i> --}}
                                    <i class="fas fa-sign-out-alt text-[1.1rem]"></i>
                                    <form action="{{ route('logout') }}" method="post" class="mb-3 items-center mx-2 block"
                                        data-turbolinks-action="replace">
                                        @csrf
                                        <button type="submit">

                                            Logout
                                        </button>
                                    </form>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </div>
            </div>

            <ul class="lg:flex hidden items-center justify-center gap-6">
                <div x-data="{ open: false }" {{ Request::is('chats') ? 'hidden' : '' }}>

                    <button id="btnSecond" @click="open = ! open"
                        class="p-[0.4rem] active:scale-90  transition-all duration-500 rounded-lg bg-slate-700">
                        {{-- <i data-feather="search" class="scale-90"></i> --}}
                        <i class="fas fa-search  text-lg mx-1 "></i>

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
                    <li><a href="{{ route('login') }}" class="font-semibold" data-turbolinks-action="replace">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

</div>
