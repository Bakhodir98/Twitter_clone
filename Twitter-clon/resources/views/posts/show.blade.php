@extends('layouts.master')

@section('title', 'Пост: '. $post->id)
@section('content')
<div class="post__comments">
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

                {{-- @dd($post->image) --}}
                @if(!is_null($post->image))
                <img src=" {{Storage::url($post->image)}}" alt="GIF" class="post__image">
                @endif
            </div>
            <div class="post__footer">
                <div>
                    <a href="{{route('post.show', $post)}}" class="post__option"><span
                            class="glyphicon glyphicon-comment"></span></a>
                    <span class="post__data__numbers">15</span>
                </div>
                <div>
                    <button>
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                    <span class="post__data__numbers">150</span>
                </div>

                <div>
                    <button>
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                    </button>
                    <span class="post__data__numbers">20</span>
                </div>
                <div>
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span class="post__data__numbers">1500</span>
                </div>
            </div>
        </div>
    </div>
    <div class="post__comment">
        <form method="POST" enctype="multipart/form-data" action="{{route('comment.store')}}">
            @csrf
            <div class="form-group">
                <input placeholder="Оставить комментарий" type="text" name="text" id="text" autocomplete="off"
                    class="form-control">
                <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
                <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
            </div>
            <button class="tweetBox_tweetButton" type="submit">Отправить</button>
        </form>
        @isset($comments)
        @foreach ($comments as $comment)
        <div class="user__comment">
            <div class="row">
                <div class="col-sm-9">
                    <img src="{{Storage::url($comment->user->image)}}" class="image__rounded">
                    <span class="post__firstname">{{$comment->user->firstname}}</span>
                    <span class="glyphicon glyphicon-ok"></span>
                    <span class="post__badge">{{$comment->user->username}}</span>
                    {{$comment->publish_date}}
                    <p>{{ $comment->text}}</p>
                </div>
                <div class="col-sm-3">
                    @if(Auth::user()->id == $comment->user->id)
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
            <div class="post__footer">
                <div>
                    <a href="{{route('post.show', $post)}}" class="post__option"><span
                            class="glyphicon glyphicon-comment"></span></a>
                    <span class="post__data__numbers">12</span>
                </div>
                <div>
                    <button>
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                    <span class="post__data__numbers">150</span>
                </div>

                <div>
                    <button>
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                    </button>
                    <span class="post__data__numbers">20</span>
                </div>
                <div>
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span class="post__data__numbers">1500</span>
                </div>
            </div>
        </div>

        @endforeach
        @endisset

    </div>
</div>

@endsection