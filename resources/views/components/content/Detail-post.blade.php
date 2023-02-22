{{-- detail post --}}
@extends('layouts.main')

@section('content')
    <div class="px-6">

        <div
            class="max-w-[835px]  mx-auto mt-32 rounded-xl w-full hover:bg-secondary transition-all duration-300 bg-primary">
            <div class="flex pb-3">
                <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                    <img class="w-12 h-12 rounded-full" src="/" alt="{{ $post->user->name }}" />
                </div>
                <div class="w-full text-white mt-4 lg:p-0 p-4">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{ $post->user->name }}</h1>
                        <small class="text-slate-400 text-[0.6rem] my-1">{{ $post->created_at->diffForhumans() }}</small>
                        <div class="my-2">
                            <p class="text-sm text-new">{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
