<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <textarea required
        class="rounded-lg w-full text-slate-200 bg-primary  focus:ring-cyan-300 focus:ring-2 duration-200 transition-all border-none outline-none"
        placeholder="comment something" name="value" id="">{{ old('value') }}</textarea>
    <div class="flex justify-end mt-2">
        <button type="submit" class="p-2 text-sm bg-cyan-500 shadow-lg text-white rounded-lg px-4">Send</button>
    </div>
</form>
