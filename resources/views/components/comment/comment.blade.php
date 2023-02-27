<div class="flex flex-col-reverse">

    @foreach ($post->comments->load('replies') as $comment)
        {{-- <p>{{ dd($comment->replies) }}</p> --}}
        @if ($comment->user->is(auth()->user()))
            {{-- @if ($comment->user->name == auth()->user()->name) --}}
            <div class="flex justify-end flex-wrap" x-data="{
                formC: false,
                formR: false,
                ReplyR: false
            }">
                <div class="max-w-[735px] mb-4  relative rounded-xl w-full  transition-all duration-300 bg-secondary">
                    <div class="flex pb-3">
                        <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                            <img class="w-12 h-12 rounded-full" alt="/" src="{{ $comment->user->avatar }}" />
                        </div>
                        <div class="w-full text-white mt-4 lg:p-0 p-4">
                            <div class="flex flex-col">
                                <h1 class="font-semibold">{{ $comment->user->name }}</h1>
                                <small
                                    class="text-sky-400 text-[0.6rem] my-1">{{ $comment->created_at->diffForhumans() }}</small>
                                <div class="my-2">
                                    <p class="text-sm text-new">{{ $comment->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4" x-data="{ opsi: false }">
                        <div class="cursor-pointer text-xl" @click="opsi = ! opsi" @click.outside="opsi = false">
                            <i class=" text-white " x-bind:class="opsi ? 'fas fa-times ' : 'fas fa-ellipsis-v'"> </i>
                        </div>
                        <div class=" absolute right-3 top-6 z-[9999]">
                            <div x-show="opsi" x-transition.duration.300ms
                                class="max-w-sm w-10 flex flex-col items-center bg-slate-300 p-2 rounded-md shadow-xl rounded-tr-none">

                                <form action="{{ route('comments.destroy', $comment) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="text-red-600 hover:bg-slate-400 transition-all duration-300 w-10"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                                <button @click="formC = ! formC"
                                    class=" hover:bg-slate-400 transition-all duration-300 w-10 ">

                                    <span>
                                        <i class="fas text-blue-600 fa-edit  ml-1"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <div class="text-sm text-slate-200 ">
                            @if ($comment->replies->count())
                                <button class="text-sky-400 underline mr-3" @click="ReplyR = !ReplyR">

                                    {{ $comment->replies->count() }} balasan
                                    {{-- @foreach ($comment->replies as $reply)
                                        {{ $reply->isi }}
                                    @endforeach --}}
                                </button>
                            @endif

                            <button @click="formR = ! formR" type="button">Balas</button>
                        </div>
                    </div>
                </div>
                {{-- form reply --}}
                <div @click.outside="formR = false" class="max-w-[600px] w-full items-center" x-show="formR"
                    x-transition.duration.500ms>
                    <form action="{{ route('replies.store') }}" method="POST"
                        class="p-3 shadow-lg shadow-secondary rounded-xl mb-4">
                        <h1 class="text-slate-200 font-semibold text-lg mb-3 ml-1">Kirim balasan</h1>
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                        <input type="text" required
                            class="rounded-lg w-full text-slate-200 bg-primary  focus:ring-cyan-300 focus:ring-2 duration-200 transition-all border-none outline-none"
                            placeholder="Bales naon weh" name="isi" id="" />
                        <div class="flex justify-end mt-3">
                            <button type="submit"
                                class="p-2 text-sm bg-sky-500 shadow-lg mb font-semibold text-white rounded-lg px-4">
                                Balas
                            </button>
                        </div>
                    </form>
                </div>
                {{-- balasan --}}
                <div class="max-w-[500px] flex flex-col space-y-2 w-full mb-3" x-show="ReplyR"
                    x-transition.duration.300ms>
                    @foreach ($comment->replies as $reply)
                        <div class="p-3 flex  w-full  rounded-lg shadow-lg bg-secondary text-slate-300">
                            <div class="flex flex-1">
                                <img src="{{ $reply->user->avatar }}" class="w-10 h-10 rounded-full lg:block hidden"
                                    alt="">
                            </div>
                            <div class="flex justify-between lg:w-[88%] w-full">
                                <div class="flex flex-col">
                                    <h2 class="font-semibold text-sm">{{ $reply->user->name }}</h2>
                                    <p class="text-xs">{!! $reply->isi !!}</p>
                                </div>

                                <small class="text-sky-400 text-xs">{{ $reply->created_at->diffForhumans() }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
                @include('components.comment.comment-form-edit')


            </div>
        @else
            <div class="flex justify-start flex-wrap" x-data="{ formN: false, ReplyL: false }">
                <div class="max-w-[735px] mb-4 relative rounded-xl w-full  transition-all duration-300 bg-primary">
                    <div class="flex pb-3">
                        <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                            <img class="w-12 h-12 rounded-full" alt="/" src="{{ $comment->user->avatar }}" />
                        </div>
                        <div class="w-full text-white mt-4 lg:p-0 p-4">
                            <div class="flex flex-col">
                                <h1 class="font-semibold">{{ $comment->user->name }}</h1>
                                <small
                                    class="text-sky-400 text-[0.6rem] my-1">{{ $comment->created_at->diffForhumans() }}</small>
                                <div class="my-2">
                                    <p class="text-sm text-new">{{ $comment->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-3 right-3 ">
                        <div class="text-sm text-slate-200 ">
                            @if ($comment->replies->count())
                                <button @click="ReplyL = ! ReplyL" class="text-sky-400 underline mr-3">

                                    {{ $comment->replies->count() }} balasan
                                </button>
                            @endif

                            <button @click="formN = ! formN" type="button">Balas</button>
                        </div>
                    </div>
                </div>
                {{-- form balasan --}}
                <div @click.outside="formN = false" class="max-w-[600px] w-full" x-show="formN"
                    x-transition.duration.500ms>
                    <form action="{{ route('replies.store') }}" method="POST"
                        class="p-3 shadow-lg shadow-secondary rounded-xl mb-4">
                        <h1 class="text-slate-200 font-semibold text-lg mb-3 ml-1">Kirim balasan</h1>
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                        <input type="text" required
                            class="rounded-lg w-full text-slate-200 bg-primary  focus:ring-cyan-300 focus:ring-2 duration-200 transition-all border-none outline-none"
                            placeholder="Bales naon weh" name="isi" id="" />
                        <div class="flex justify-end mt-3">
                            <button type="submit"
                                class="p-2 text-sm font-semibold bg-sky-500 shadow-lg mb text-white rounded-lg px-4">
                                Balas
                            </button>
                        </div>
                    </form>
                </div>
                <div class="max-w-[500px] flex flex-col space-y-2 w-full mb-3" x-show="ReplyL"
                    x-transition.duration.300ms>
                    @foreach ($comment->replies as $reply)
                        <div class="p-3 flex  w-full  rounded-lg shadow-lg bg-secondary text-slate-300">
                            <div class="flex flex-1">
                                <img src="{{ $reply->user->avatar }}" class="w-10 h-10 rounded-full lg:block hidden"
                                    alt="">
                            </div>
                            <div class="flex justify-between lg:w-[88%] w-full">
                                <div class="flex flex-col">
                                    <h2 class="font-semibold text-sm">{{ $reply->user->name }}</h2>
                                    <p class="text-xs">{!! $reply->isi !!}</p>
                                </div>

                                <small class="text-sky-400 text-xs">{{ $reply->created_at->diffForhumans() }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
    {{-- untuk yang kpunya post --}}

</div>
