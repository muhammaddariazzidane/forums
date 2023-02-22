<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function show(Post $post): Response
    {

        // dd($post->load('comments', 'user'));
        return response()->view('components.content.Detail-post', [
            // 'post' => Post::with('comments')
            'post' => $post->load('comments', 'user')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        //
    }
}
