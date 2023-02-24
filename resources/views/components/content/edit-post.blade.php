@extends('layouts.main')

@section('content')
    <div class="px-6">

        <div class="max-w-lg p-6 relative mx-auto mt-32 rounded-xl w-full bg-secondary transition-all duration-300 ">
            <h1 class="text-center text-white text-2xl font-semibold mb-6">Edit postingan</h1>
            <form action="{{ route('posts.update', $post) }}" method="post">
                @csrf
                @method('patch')
                {{-- <textarea name="body"
                    class="block w-full bg-primary border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea> --}}
                <textarea name="body"
                    class="w-full px-4 rounded-lg text-slate-200 bg-slate-900  focus:ring-cyan-400 focus:ring-2 duration-200 transition-all border-none outline-none "
                    placeholder="lorem ipsum" autofocus>{{ old('body', $post->body) }}</textarea>
                {{-- {{ $post->body }} --}}
                <button type="submit" class="py-1 px-4 rounded-md text-black bg-slate-400 mt-5 active:opacity-80">
                    {{ __('Update') }}
                </button>
            </form>

        </div>
    </div>
@endsection
