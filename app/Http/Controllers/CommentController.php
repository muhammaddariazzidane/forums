<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
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
    public function store(Request $request)
    {
        // dd($data['post_id']);
        $data = $request->validate([
            'value' => 'required'
        ]);

        $data['user_id'] = $request->user()->id;
        $data['post_id'] = $request->post_id;
        // $data['post_id'] = $post->id;

        Comment::create($data);
        // $post->comments()->create($data);
        // $post->id->comments()->create($data);
        return redirect()->back()->with('message', 'comment added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        //
    }
}
