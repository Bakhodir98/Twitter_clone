@extends('layouts.master')
@section('content')

<div class="feed">
    <div class="feed__header">
        <h2>Главная</h2>
    </div>
    <div class="tweetBox">
        <form method="POST" enctype="multipart/form-data" action="{{route('post.store')}}">
            @csrf
            <div class="tweetBox__input">
                <img src="{{Storage::url($user->image)}}" class="image__rounded">

                <input placeholder="Что нового?" type="text" name="text" id="text" autocomplete="off">
                <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
            </div>
            <div class="post__icons">
                <div class="post__option">
                    <label class="glyphicon glyphicon-picture">
                        <input type="file" style="display: none" name="image" id="image">

                    </label>
                </div>
            </div>
            <button class="tweetBox_tweetButton">Твитнуть</button>
        </form>
    </div>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
    @include('post', compact('post'))
    @endforeach
</div>
@endsection