@extends('layouts.master')
@section('content')
{{-- <div id="example"></div> --}}

<div class="feed">
    <div class="feed__header">
        <h2>Главная</h2>
    </div>
    <div class="tweetBox">
        <form>
            <div class="tweetBox__input">
                <img src="{{Storage::url($user->image)}}" class="image__rounded">
                <input placeholder="Что нового?" type="text">
            </div>
            <input class="tweetBox__imageInput" placeholder="Введите url рисунка" type="text">

            <button class="tweerBox_tweetButton">Твитнуть</button>
        </form>
    </div>
    @include('post')
</div>
@endsection