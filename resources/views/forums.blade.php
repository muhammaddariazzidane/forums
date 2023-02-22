@extends('layouts.main')
@section('content')
    <div class="max-w-[835px] lg:px-0 px-6 lg:mt-20 mt-16 relative mx-auto min-h-screen">
        <div class="text-center py-5 border-b mb-2 border-secondary">
            {{-- <div class="relative flex items-center space-x-4"> --}}

            <h1 class="text-white text-xl font-semibold">Forum diskusi</h1>
            {{-- </div> --}}

        </div>
        @if ($chats->count())
            <div {{-- x-data x-init="window.scrollTo({ top: 1990, behavior: 'smooth' })" --}}
                class="flex flex-col space-y-4 p-3
                overflow-y-auto min-h-full mb-12 scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter
                scrollbar-w-2 scrolling-touch">
                @foreach ($chats as $chat)
                    @if ($chat->user->name == auth()->user()->name)
                        {{-- yang ngirim --}}
                        <div class="chat-message">
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                    <div><span
                                            class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-slate-600 text-slate-200 ">
                                            {{ $chat->message }}</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-2">
                            </div>
                        </div>
                    @else
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span
                                            class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-[#1B365C] text-slate-200">{{ $chat->message }}
                                        </span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>
        @else
        @endif


        {{-- <div class="relative flex"> --}}
        <form class="fixed bottom-0 z-[9999] max-w-[835px] mx-auto left-0 right-0" method="post"
            action="{{ route('chats.store') }}">
            {{-- <input type="text" class="w-full rounded-lg"> --}}
            @csrf
            <div class="relative">
                <input autofocus type="text" name="message" placeholder="Write your message!"
                    class="w-full focus:outline-none border-none focus:ring-cyan-400 focus:placeholder-gray-400 text-slate-200 placeholder-gray-600 pl-6 pr-[3.7rem] bg-secondary rounded-xl py-2">
                <div class="absolute top-0 right-0 p-2 group bg-cyan-400 rounded-r-xl">
                    <button type="submit" class="rotate-45 group-hover:scale-105 transition-all duration-300">
                        <i data-feather="send"></i>

                    </button>
                </div>
            </div>
        </form>
        {{-- </div> --}}
    </div>
@endsection
