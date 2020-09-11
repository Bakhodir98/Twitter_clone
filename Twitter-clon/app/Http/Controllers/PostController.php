<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use App\Like;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $params = $request->all();
        // return json_encode($params);

        if ($request->has('image')) {
            $path = $request->file('image')->store('posts');
            $params['image'] = $path;
        }
        Post::create($params);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $likes = Like::where('post_id', $post->id);
        return view('post.show', compact('post', 'likes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $user = $post->user;
        if (Auth::user() == $user) {
            return view('post.form', compact('post', 'user'));
        } else {
            return back();
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($post->image);
            $path = $request->file('image')->store('posts');
            $params['image'] = $path;
        } else if ($request['delete_image_check'] == "unvisible") {
            Storage::delete($post->image);
            $params['image'] = null;
        }

        $post->update($params);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (request()->ajax()) {
        } else {
            $post->delete();
            return back();
        }
    }
}