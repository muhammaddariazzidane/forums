<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center gap-4">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            @if ($post->user->is(auth()->user()))
                                <div class="max-w-xs ">
                                    <div class=" relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                                        <img class="rounded-t-lg" src="{{ $post->photo }}" alt="" />
                                        <div class="py-6 pb-12 px-6  rounded-lg bg-primary">

                                            <p class="text-gray-200 tracking-wide">{{ $post->body }}</p>

                                        </div>
                                        <div class="absolute bottom-2 right-2   rounded-lg">
                                            <a href="{{ route('posts.show', $post) }}"
                                                class="flex justify-center items-center gap-1">
                                                <i class="fas fa-comments"></i>
                                                <span class="text-md">{{ $post->comments->count() }}</span>
                                            </a>
                                        </div>
                                        <div class="absolute left-2 bottom-2">
                                            <small
                                                class="text-xs text-blue-600">{{ $post->created_at->diffForhumans() }}</small>
                                        </div>
                                        <div class=" absolute right-3 top-3 " x-data="{ opsi: false }">
                                            <div class="cursor-pointer text-xl" @click="opsi = ! opsi"
                                                @click.outside="opsi = false">
                                                <i class=" text-white "
                                                    x-bind:class="opsi ? 'fas fa-times ' : 'fas fa-ellipsis-v'"></i>
                                            </div>
                                            {{-- <div class="cursor-pointer text-xl" @click="opsi = ! opsi">
                                                <i class=" text-white "
                                                    x-bind:class="opsi ? 'fas fa-times ' : 'fas fa-ellipsis-v'"></i>
                                            </div> --}}
                                            <div class="absolute right-3 top-6">

                                                <div x-show="opsi" x-transition.duration.300ms
                                                    class="max-w-sm w-10 flex flex-col items-center bg-slate-300 p-2 rounded-md shadow-xl rounded-tr-none">

                                                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="text-red-600 hover:bg-slate-400 transition-all duration-300 w-10"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                    <button
                                                        class=" hover:bg-slate-400 transition-all duration-300 w-10 ">

                                                        <a href="{{ route('posts.edit', $post) }}">
                                                            <i class="fas text-blue-600 fa-edit  ml-1"></i></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <h1 class="text-center text-2xl text-white">Kamu belum punya postingan</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
