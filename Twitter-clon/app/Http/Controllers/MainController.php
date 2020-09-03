<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->orderBy('id', 'DESC')->get();
        $user = Auth::user();
        return view('index', compact('user', 'posts'));
    }
}