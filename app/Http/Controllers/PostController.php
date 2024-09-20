<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Get all posts
    public function index()
    {
        return Post::all();
    }

    // Create new post
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    // Get a single post
    public function show($id)
    {
        return Post::find($id);
    }

    // Update a post
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    // Delete a post
    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json(null, 204);
    }
}