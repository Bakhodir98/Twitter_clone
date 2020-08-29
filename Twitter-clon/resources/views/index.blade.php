@extends('layouts.master')
@section('content')
<div class="feed__header">
    <h2>Главная</h2>
</div>
<div class="feed">
    <div class="tweetBox">
        <form>
            <div class="tweetBox__input">
                <img src="{{Storage::url($user->image)}}" class="image__rounded">
                <input placeholder="Что нового?" type="text">
            </div>

            <div class="post__icons">
                <div class="post__option">
                    <span class="glyphicon glyphicon-picture"></span>
                </div>
                <div class="post__option">
                    <span class="glyphicon glyphicon-file"></span>
                </div>
                <div class="post__option">
                    <span class="glyphicon glyphicon-align-left"></span>
                </div>
                <div class="post__option">
                    <span class="glyphicon glyphicon-paperclip"></span>
                </div>
            </div>
            <button class="tweerBox_tweetButton">Твитнуть</button>
        </form>
    </div>
    @include('post')
</div>
@endsection