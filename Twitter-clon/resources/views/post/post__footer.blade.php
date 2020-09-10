{{-- @dd() --}}
{{-- , 'like' = true --}}
<div class="post__footer">
    <div>
        <a href="{{route('post.show',compact('post'))}}" class="post__option"><span
                class="glyphicon glyphicon-comment"></span></a>
        {{-- @dd($post->comments) --}}
        <span class="post__data__numbers">{{$post->comments->count()}}</span>
    </div>
    {{-- <span id="total_records">ф</span> --}}
    <form method="POST" data-postid="{{$post->id}}" action="{{route('like.store')}}" enctype="multipart/form-data">
        {{-- <input type="hidden" name="post_id" value="{{$post->id}}"> --}}
        {{-- <input type="hidden" name="user_id" value="{{$user->id}}"> --}}
        {{-- <input type="hidden" name="like" value="1"> --}}
        @csrf
        <button class="like glyphicon glyphicon-thumbs-up" type="submit">
            <span>{{$likes->where('post_id', $post->id)->where('like', 1)->count()}}</span>
        </button>
        <button class="like glyphicon glyphicon-thumbs-down" type="button">
            <span>{{$likes->where('post_id', $post->id)->where('like', 0)->count()}}</span>
        </button>
    </form>
    {{-- <div>
        <span class="glyphicon glyphicon-eye-open"></span>
        <span class="post__data__numbers">{{$post->views}}</span>
</div> --}} </div>