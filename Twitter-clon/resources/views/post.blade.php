<div class="post">
    <div class="post__body">
        <div class="post__header">
            <div class="post__headerText row">
                <div class="col-sm-9">
                    <img src="{{Storage::url($user->image)}}" class="image__rounded">
                    <span>{{$user->firstname}}</span>
                    <span class="glyphicon glyphicon-ok"></span>
                    <span class="post__badge">{{$user->username}}</span>
                    {{$post->publish_date}}
                </div>
                <div class="col-sm-3">
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
                </div>
            </div>
        </div>
        <div class="post__bodyDesription">
            <div>
                {{$post->text}}
            </div>
            <img src=" {{Storage::url($post->image)}}" alt="GIF" class="post__image">
        </div>
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