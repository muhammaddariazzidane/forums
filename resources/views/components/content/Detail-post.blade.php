{{-- detail post --}}
@extends('layouts.main')

@section('content')
    <div class="px-6">
        <div
            class="max-w-[835px] relative mx-auto mt-32 rounded-xl w-full hover:bg-secondary transition-all duration-300 bg-primary">
            <div class="flex pb-3">
                <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                    <img class="w-12 h-12 rounded-full" src="{{ $post->user->avatar }}" alt="/" />
                </div>
                <div class="w-full text-white mt-4 lg:p-0 p-4">
                    <div class="flex flex-col">
                        <h1 class="font-semibold truncate">{{ $post->user->name }}</h1>
                        <small class="text-slate-400 text-[0.6rem] my-1">{{ $post->created_at->diffForhumans() }}</small>
                        <div class="my-2">
                            <p class="text-sm text-new">{!! $post->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if ($post->user->is(auth()->user()))
                <div class="absolute top-4 right-4" x-data="{ opsi: false }">
                    <div class="cursor-pointer text-xl" @click="opsi = ! opsi" @click.outside="opsi = false">
                        <i class=" text-white " x-bind:class="opsi ? 'fas fa-times ' : 'fas fa-ellipsis-v'"></i>
                    </div>
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
                            <button class=" hover:bg-slate-400 transition-all duration-300 w-10 ">

                                <a href="{{ route('posts.edit', $post) }}">
                                    <i class="fas text-blue-600 fa-edit  ml-1"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-white absolute top-4 right-4"><i class="fas fa-trash"></i></button>
                </form> --}}
            @endif
        </div>
        <div class="max-w-[835px] mx-auto mt-7">
            <div class="flex">
                <div class="w-[10.99999%] relative lg:block hidden">
                    <span class="absolute top-0 left-0 rotate-90 h-[2px] w-[2.3rem] bg-slate-700"></span>
                    <span class="absolute top-[1.1rem] right-4 h-[2px] w-[3rem] bg-slate-700"></span>
                </div>
                <div class="w-full">
                    @include('components.comment.comment-form')
                </div>
            </div>
            <div class="mt-5 ">

                @include('components.comment.comment')
            </div>
        </div>
    </div>
@endsection
