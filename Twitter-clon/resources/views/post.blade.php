{{-- @dd($post) --}}
<div class="post">
    <div class="post__body">
        <div class="post__header">
            <div class="post__headerText row">
                <div @if(Auth::user()->id == $post->user->id)class="col-sm-9" @else class="col-sm-12" @endif>
                    <img src="{{Storage::url($post->user->image)}}" class="image__rounded">
                    <span class="post__firstname">{{$post->user->firstname}}</span>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="{{route('user.show', $post->user)}}"><span
                            class="post__badge">{{$post->user->username}}</span></a>
                    {{$post->publish_date}}
                </div>
                @if(Auth::user()->id == $post->user->id)
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
                @endif
            </div>
        </div>
        <div class="row post__bodyDesription">
            <div class="col-sm-12 post__text">
                {{$post->text}}
            </div>
            @if(!is_null($post->image))
            <img src=" {{Storage::url($post->image)}}" alt="GIF" class="post__image">
            @endif
        </div>
        @include('post.post__footer', compact('post'))
    </div>
</div>