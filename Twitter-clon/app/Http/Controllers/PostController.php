<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
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
        // $user_id = Auth::user()->id;
        // $user = User::where('id', $user_id)->first();
        // return view('index', compact('user', ));
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
    public function store(Request $request)
    {
        // dd($request);
        // $user_id = Auth::user()->id;
        // $user = User::where('id', $user_id)->first();
        $path = $request->file('image')->store('posts');
        $params = $request->all();
        $params['image'] = $path;
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
        $comments = Comment::where('post_id', $post->id)->get();
        $user = Auth::user();
        return view('posts.show', compact('post', 'comments', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        return view('posts.form', compact('post', 'user'));
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
        // dd($request);
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($post->image);
            $path = $request->file('image')->store('posts');
            $params['image'] = $path;
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
        $post->delete();
        return back();
    }
}