<div class="post__footer">
    <div>
        <a href="{{route('post.show',compact('post'))}}" class="post__option"><span
                class="glyphicon glyphicon-comment"></span></a>
        {{-- @dd($post->comments) --}}
        <span class="post__data__numbers">{{$post->comments->count()}}</span>
    </div>
    <div>
        <button id="like">
            <span class="glyphicon glyphicon-thumbs-up"></span>
        </button>
        <span class="post__data__numbers">{{$post->likes}}</span>
    </div>

    <div>
        <button id="dislike">
            <span class="glyphicon glyphicon-thumbs-down"></span>
        </button>
        <span class="post__data__numbers">{{$post->dislikes}}</span>
    </div>
    <div>
        <span class="glyphicon glyphicon-eye-open"></span>
        <span class="post__data__numbers">{{$post->views}}</span>
    </div>
</div>