<div class="post">
    <div class="post__body">
        <div class="post__header">
            <div class="post__headerText row">
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
        {{--  post__text --}}
        <div class="row post__bodyDesription">
            <div class="col-sm-12 post__text">
                {{$post->text}}
            </div>
            @if(!is_null($post->image))
            <img src=" {{Storage::url($post->image)}}" alt="GIF" class="post__image">
            @endif
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
</div>