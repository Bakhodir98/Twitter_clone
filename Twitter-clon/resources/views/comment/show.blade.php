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
            <form action="{{route('comment.destroy', $post)}}" method="POST">
                <a href="{{route('comment.edit', $post)}}" class="btn btn-warning">
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
            <a href="{{route('comment.show', $comment)}}" class="post__option"><span
                    class="glyphicon glyphicon-comment"></span></a>
            <span class="post__data__numbers">102</span>
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