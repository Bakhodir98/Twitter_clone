@extends('layouts.master')
@section('content')
@section('title', 'Редактировать пост '.$post->id)
@section('content')
<div class="col-md-12">
    <h1>Редактировать Пост</h1>
    <img src="{{Storage::url($user->image)}}" class="image__rounded">
    <span>{{$user->firstname}}</span>
    <span class="glyphicon glyphicon-ok"></span>
    <span class="post__badge">{{$user->username}}</span>
    <form method="POST" enctype="multipart/form-data" action="{{route('post.update', $post)}}">
        @isset($post)
        @method('PUT')
        @endisset
        @csrf
        <div class="input-group row">
            <input type="hidden" name="user_id" id="user_id" value="{{$post->user_id}}">
            <label for="text" class="col-sm-2 col-form-label">Текст: </label>
            <div class="col-sm-10">
                @error('code')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <textarea type="text" class="form-control" name="text" id="text" cols="10"
                    rows="5">@isset($post){{$post->text}}@endisset</textarea>
            </div>
            <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
            <div class="col-sm-10">
                <label class="btn btn-default btn-file">
                    Загрузить
                    <input type="file" style="display:none" name="image" id="image">
                </label>
            </div>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </div>
    </form>
</div>
@endsection
@endsection