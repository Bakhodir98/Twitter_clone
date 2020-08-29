<div class="post">
    <div class="post__body">
        <div class="post__header">
            <div class="post__headerText">
                <img src="{{Storage::url($user->image)}}" class="image__rounded">
                <span>{{$user->firstname}}</span>
                <span class="glyphicon glyphicon-ok"></span>
                <span class="post__badge">{{$user->username}}</span>
            </div>
        </div>
        <div class="post__bodyDesription">
            <div>
                {{$post->text}}
            </div>
            <img src="{{Storage::url($post->image)}}" alt="GIF" class="">
        </div>
    </div>
    <div class="post__footer">
        <div class="row">
            <div class="col-sm-3 bootstrap__no__padding ">
                <div class="post__menu post__menu--active">
                    <span class="glyphicon glyphicon-comment"></span>
                </div>
            </div>
            <div class="col-sm-3 bootstrap__no__padding">
                <div class="post__menu">
                    <span class="glyphicon glyphicon-heart-empty"></span>
                </div>
            </div>
            <div class="col-sm-3 bootstrap__no__padding">
                <div class="post__menu">
                    <span class="glyphicon glyphicon-hand-down"></span>
                </div>
            </div>
            <div class="col-sm-3 bootstrap__no__padding">
                <div class="post__menu">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </div>
            </div>
        </div>
    </div>
</div>