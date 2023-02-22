{{-- org lain --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@foreach ($post->comments as $c)
    @if ($c->user->name == auth()->user()->name)
        <div class="max-w-[735px] float-right mb-4 relative rounded-xl w-full  transition-all duration-300 bg-secondary">
            <div class="flex pb-3">
                <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                    <img class="w-12 h-12 rounded-full" alt="/" src="/" />
                </div>
                <div class="w-full text-white mt-4 lg:p-0 p-4">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{ $c->user->name }}</h1>
                        <small class="text-slate-400 text-[0.6rem] my-1">{{ $c->created_at->diffForhumans() }}</small>
                        <div class="my-2">
                            <p class="text-sm text-new">sjd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="max-w-[735px] mb-4 relative rounded-xl w-full  transition-all duration-300 bg-primary">
            <div class="flex pb-3">
                <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                    <img class="w-12 h-12 rounded-full" alt="/" src="/" />
                </div>
                <div class="w-full text-white mt-4 lg:p-0 p-4">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{ $c->user->name }}</h1>
                        <small class="text-slate-400 text-[0.6rem] my-1">{{ $c->created_at->diffForhumans() }}</small>
                        <div class="my-2">
                            <p class="text-sm text-new">{{ $c->value }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
{{-- untuk yang kpunya post --}}
