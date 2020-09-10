<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->get();
        // dd($posts);orderBy('id', 'DESC')->
        $user = Auth::user();
        $likes = Like::get();
        // dd($likes);

        return view('index', compact('user', 'posts', 'likes'));
    }
}