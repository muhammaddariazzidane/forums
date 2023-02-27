<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'body' => 'required'
        ]);

        $request->user()->posts()->create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {

        // dd($post->comments->load('replies'));
        // dd(Reply::latest()->get());
        // dd($post->comments->load('replies'));
        // dd($post->comments->load('replies'));
        return view('components.content.Detail-post', [
            // 'post' => Post::with('comments')
            'post' => $post,
            // 'replies' => Reply::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        return view('components.content.edit-post', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $data = $request->validate([
            'body' => 'required|string|max:255',
        ]);

        $post->update($data);
        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->to('/');
    }
}
