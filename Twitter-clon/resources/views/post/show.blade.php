@extends('layouts.master')
@section('content')
<div class="post__comments" id="post__comment">
    <div class="post">
        <div class="post__body">
            <div class="post__header">
                <div class="row">
                    <div class="col-sm-9">
                        <img src="{{Storage::url($post->user->image)}}" class="image__rounded">
                        <span class="post__firstname">{{$post->user->firstname}}</span>
                        <span class="glyphicon glyphicon-ok"></span>
                        <span class="post__badge">{{$post->user->username}}</span>
                        {{$post->publish_date}}
                    </div>
                    <div class="col-sm-3">
                        @if(Auth::user()->id == $post->user->id)
                        <form action="{{route('post.destroy', $post)}}" method="POST">
                            <a href="{{route('post.edit', $post)}}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <button class="btn btn-danger" type="submit">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            @csrf
                            @method('DELETE')
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="post__bodyDesription">
                <div>
                    {{$post->text}}
                </div>
                @if(!is_null($post->image))
                <img src=" {{Storage::url($post->image)}}" alt="GIF" class="post__image">
                @endif
            </div>
            @include('post.post__footer', compact('post'))
        </div>
    </div>
    <div class="post__comment">
        <form method="POST" enctype="multipart/form-data" action="{{route('comment.store')}}" id="comment__form">
            @csrf
            <div class="form-group">
                @error('text')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input placeholder="Оставить комментарий" type="text" name="text" id="text" autocomplete="off"
                    class="form-control" required>
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
                <input type="hidden" name="action" id="action" value="Add" />
            </div>
            <button class="tweetBox_tweetButton" type="submit" id="action__button">Отправить</button>
        </form>
        <div id="form__result"></div>
        {{-- @dd($post->comments) --}}
        @foreach ($post->comments->reverse() as $comment)
        @include('comment.show', compact('comment'))
        @endforeach
    </div>
</div>
@endsection