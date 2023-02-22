@if ($posts->count())
    @foreach ($posts as $p)
        <a href="{{ route('posts.show', $p) }}">
            <div
                class="relative transition-all bg-primary hover:bg-secondary duration-300 text-new  px-5 py-4 rounded-xl mb-3  cursor-pointer">
                <div class="w-full">
                    <div class="flex mb-4 flex-wrap items-center">
                        <img class="w-12 h-12 rounded-full" alt="Use." src="/" />
                        <p class="mx-2 text-gray-300 font-semibold text-sm">
                            {{ $p->user->name }}
                        </p>
                    </div>
                    <p class="text-md">{{ $p->body }}</p>

                    <p class="mt-3 text-sm text-blue-600">{{ $p->created_at->diffForhumans() }}</p>
                    <div class="absolute top-4  rounded-full p-1 right-4">
                        <div class="flex justify-center items-center">

                            <i data-feather="message-square" width='19'></i>
                            <p class="text-sm ml-1">
                                {{ $p->comments->count() }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@else
    <h1 class="text-center text-white font-semibold text-2xl mt-12 ">No Post</h1>
@endif
