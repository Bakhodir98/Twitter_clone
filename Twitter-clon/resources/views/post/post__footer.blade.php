{{-- @dd($likes) --}}
<div class="post__footer">
    <div>
        <a href="{{route('post.show', compact('post', 'likes') )}}" class="post__option"><span
                class="glyphicon glyphicon-comment"></span></a>
        <span class="post__data__numbers">{{$post->comments->count()}}</span>
    </div>
    <form method="POST" data-postid="{{$post->id}}" action="{{route('like.store')}}" enctype="multipart/form-data">
        @csrf
        <button @if($likes->where('post_id', $post->id)->where('user_id',
            Auth::user()->id)->where('like', true)->first())class="like glyphicon glyphicon-thumbs-up post__like"
            @else class="like glyphicon glyphicon-thumbs-up" @endif type="submit">
            <span id="post__like">{{$likes->where('post_id', $post->id)->where('like', 1)->count()}}</span>
        </button>
        <button @if($likes->where('post_id', $post->id)->where('user_id',
            Auth::user()->id)->where('like', false)->first())class="like glyphicon glyphicon-thumbs-down
            post__dislike"@else class="like glyphicon glyphicon-thumbs-down" @endif type="button">
            <span id="post__dislike">{{$likes->where('post_id', $post->id)->where('like', 0)->count()}}</span>
        </button>
    </form>
</div>