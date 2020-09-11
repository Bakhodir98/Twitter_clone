<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        $likes = Like::get();
        return view('profile', compact('user', 'posts', 'likes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Like $likes)
    {
        $posts = Post::where('user_id', $user->id)->get();
        return view('profile', compact('user', 'posts', 'likes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user->id == Auth::user()->id)
            return view('user.form', compact('user'));
        else
            return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($user->id == Auth::user()->id) {
            $params = $request->all();
            unset($params['image']);
            if ($request->has('image')) {
                Storage::delete($user->image);
                $path = $request->file('image')->store('categories');
                $params['image'] = $path;
            }
            $user->update($params);
            return redirect()->route('index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == Auth::user()->id) {
            $user->delete();
            return redirect()->route('login');
        } else
            return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function PasswordChangeForm(User $user)
    {
        $user = Auth::user();
        return view('user/passwordChange', compact('user'));
    }
    public function ChangePassword(Request $request)
    {
        if (!Hash::check($request->get('current_password'), Auth::user()->password)) {
            return back()->with("error", "Ошибка неверный пароль");
        } else {
            $request['new_password'] = Hash::make($request->new_password);
            if (Hash::check($request['confirm_new_password'], $request['new_password'])) {
                $user = User::find(Auth::id());
                $user->password = $request['new_password'];
                $user->save();
                Auth::logout();
                return redirect()->route('login');
            } else {
                return back()->with("error", "Ошибка пароли не совподают");
            }
        }
    }
}