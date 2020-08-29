<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $posts = Post::where('user_id', $user_id)->get();
        return view('index', compact('user', 'posts'));
    }
}