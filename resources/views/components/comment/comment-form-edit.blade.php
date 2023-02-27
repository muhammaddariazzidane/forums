<div @click.outside="formC = false" class="max-w-[600px] w-full" x-show="formC" x-transition.duration.500ms>
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
