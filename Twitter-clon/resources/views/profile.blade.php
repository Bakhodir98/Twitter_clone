@extends('layouts.master')
@section('content')
<div class="Feed">
    <div class="profile">
        <div class="jumbotron">
            <h2>{{$user->firstname}}</h2>
            <p>2 tweets</p>
            <img src="{{Storage::url($user->image)}}" alt="Avatar" class="image__rounded__profile">
        </div>
        <div class="info">
            <p>{{$user->firstname}}</p>
            <p>{{$user->username}}</p>
            <p>Регистрация: август 2020 г.</p>
            <p>3 В читаемых</p>
            <p>0 Читатели</p>
        </div>
        <form action="{{route('user.destroy',$user->id )}}" method="POST">
            <a href="{{route('user.edit', $user)}}" class="btn btn-warning" type="button">Редактировать</a>
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Удалить">
        </form>

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
</div>

@endsection