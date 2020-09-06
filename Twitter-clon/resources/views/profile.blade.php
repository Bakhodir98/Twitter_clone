@extends('layouts.master')
@section('content')
<div class="feed">
    <div class="profile">
        <div class="jumbotron">
            <h2>{{$user->firstname}}</h2>
            <p>{{$posts->count()}} tweets</p>
            <img src="{{Storage::url($user->image)}}" alt="Avatar" class="image__rounded__profile">
        </div>
        <div class="info row">
            <div @if(Auth::user()->id == $user->id) class="col-sm-9" @else class="col-sm-12"@endif>
                {{-- <img src="{{Storage::url($post->user->image)}}" class="image__rounded"> --}}
                <table>
                    <tbody>
                        <tr>
                            <td>Имя</td>
                            <td>{{$user->firstname}}</td>
                        </tr>
                        <tr>
                            <td>Фамилия</td>
                            <td>{{$user->lastname}}</td>
                        </tr>
                        <tr>
                            <td>Имя пользователья</td>
                            <td><a href="{{route('user.index')}}"><span
                                        class="post__badge">{{$user->username}}</span></a>
                            </td>
                        </tr>
                        @if(Auth::user() != $user)
                        <tr>
                            <td><button class="btn btn-danger">Подписаться</button></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            @if(Auth::user()->id == $user->id)
            <div class="col-sm-3">
                <form action="{{route('user.destroy', $user)}}" method="POST">
                    <a href="{{route('user.edit', $user)}}" class="btn btn-warning">
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
    <div class="row">
        <div class="col-sm-3 bootstrap__no__padding ">
            <div class="profile__menu profile__menu--active">
                Твиты
            </div>
        </div>
        <div class="col-sm-3 bootstrap__no__padding">
            <div class="profile__menu">
                Твиты и Ответы
            </div>
        </div>
        <div class="col-sm-3 bootstrap__no__padding">
            <div class="profile__menu">
                Медиа
            </div>
        </div>
        <div class="col-sm-3 bootstrap__no__padding">
            <div class="profile__menu">
                Нравится
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
    @include('post', compact('post'))
    @endforeach
</div>

@endsection