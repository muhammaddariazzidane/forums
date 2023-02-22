{{-- <x-guest-layout> --}}
@extends('layouts.main')

@section('content')
    {{-- @include('components.modal.Modal-search') --}}
    <div class="max-w-[835px] mx-auto w-full mt-14 p-6 min-h-screen">
        <div class="flex my-4 w-full flex-col lg:flex-row gap-4 lg:justify-between">
            @include('components.button.Btn-create')

            @include('components.search.search')
        </div>
        @include('components.post')





    </div>
@endsection
{{-- </x-guest-layout> --}}
