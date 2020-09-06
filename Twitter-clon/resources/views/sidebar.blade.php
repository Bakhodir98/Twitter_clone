<div class="Sidebar__twitterIcon">
    <span class="fa fa-twitter"></span>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{-- <a class="navbar-brand" href="#">TwitterClone</a> --}}
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="SidebarOption">
                <li class="active">
                    <a href="{{route('index')}}" class="SidebarOptionLink"><span class="glyphicon glyphicon-home "
                            style="display: inline"></span>
                        Главная
                    </a>
                </li>
                <li>
                    <a href="{{route('live_search.index')}}" class="SidebarOptionLink">
                        <span class="glyphicon glyphicon-search"></span>
                        Поиск
                    </a>
                </li>
                <li>
                    <a href="" class="SidebarOptionLink">
                        <span class="glyphicon glyphicon-bell"></span>
                        Уведомления
                    </a>
                </li>
                <li>
                    <a href="" class="SidebarOptionLink">
                        <span class="glyphicon glyphicon glyphicon-envelope"></span>
                        Сообщения
                    </a>
                </li>
                <li>
                    <a href="" class="SidebarOptionLink">
                        <span class="glyphicon glyphicon-bookmark"></span>
                        Закладки
                    </a>
                </li>
                <li>
                    <a href="" class="SidebarOptionLink">
                        <span class="glyphicon glyphicon-list-alt"></span>
                        Списки
                    </a>
                </li>
                <li>
                    <a href="{{route('user.index')}}" class="SidebarOptionLink"><span
                            class="glyphicon glyphicon-user"></span>
                        Профиль
                    </a>
                </li>
                <li>
                    <a href="" class="SidebarOptionLink">
                        <span class=" glyphicon glyphicon-option-horizontal"></span>
                        Еще
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                @auth
                <li><a href="{{route('get-logout')}}"><span class="glyphicon glyphicon-log-in"></span> Выйти</a></li>
                @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<form>
    <button class="sidebar_tweetButton">Твитнуть</button>
</form>