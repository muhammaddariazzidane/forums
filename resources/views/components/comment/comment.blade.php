@foreach ($post->comments as $comment)
    @if ($comment->user->name == auth()->user()->name)
        <div x-data="{ formC: false }">

            <div
                class="max-w-[735px] float-right mb-4 relative rounded-xl w-full  transition-all duration-300 bg-secondary">
                <div class="flex pb-3">
                    <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                        <img class="w-12 h-12 rounded-full" alt="/" src="{{ $comment->user->avatar }}" />
                    </div>
                    <div class="w-full text-white mt-4 lg:p-0 p-4">
                        <div class="flex flex-col">
                            <h1 class="font-semibold">{{ $comment->user->name }}</h1>
                            <small
                                class="text-slate-400 text-[0.6rem] my-1">{{ $comment->created_at->diffForhumans() }}</small>
                            <div class="my-2">
                                <p class="text-sm text-new">{{ $comment->value }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-4 right-4" x-data="{ opsi: false }">
                    <div class="cursor-pointer text-xl" @click="opsi = ! opsi" @click.outside="opsi = false">
                        <i class=" text-white " x-bind:class="opsi ? 'fas fa-times ' : 'fas fa-ellipsis-v'"></i>
                    </div>
                    {{-- <div x-if="opsi">
                    <i class="fas fa-times"></i>
                </div> --}}
                    <div class=" absolute right-3 top-6 ">
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

            </div>
            <div @click.outside="formC = false" class="max-w-[600px] float-right w-full" x-show="formC"
                x-transition.duration.500ms>
                <form action="{{ route('comments.update', $comment) }}" method="POST"
                    class="p-3 shadow-lg shadow-secondary rounded-xl mb-4">
                    <h1 class="text-slate-200 font-semibold text-lg mb-3">Edit komentar</h1>
                    @csrf
                    @method('patch')
                    <textarea required
                        class="rounded-lg w-full text-slate-200 bg-primary  focus:ring-cyan-300 focus:ring-2 duration-200 transition-all border-none outline-none"
                        placeholder="Komen naon weh" name="value" id="">{{ $comment->value }}</textarea>
                    <div class="flex justify-end mt-2">
                        <button type="submit"
                            class="p-2 text-sm bg-cyan-500 shadow-lg mb text-white rounded-lg px-4">Update</button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="max-w-[735px] mb-4 relative rounded-xl w-full  transition-all duration-300 bg-primary">
            <div class="flex pb-3">
                <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                    <img class="w-12 h-12 rounded-full" alt="/" src="{{ $comment->user->avatar }}" />
                </div>
                <div class="w-full text-white mt-4 lg:p-0 p-4">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{ $comment->user->name }}</h1>
                        <small
                            class="text-slate-400 text-[0.6rem] my-1">{{ $comment->created_at->diffForhumans() }}</small>
                        <div class="my-2">
                            <p class="text-sm text-new">{{ $comment->value }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
{{-- untuk yang kpunya post --}}
