@extends('layouts.master')
@section('content')
<div class="Feed">
    <div class="profile">
        <div class="row">
            <div class="header">
                <h2>{{$user->firstname}}</h2>
                <p>2 tweets</p>
                <img src="{{Storage::url($user->image)}}" alt="Avatar" class="image__rounded">
            </div>
            <div class="info">
                <p>{{$user->firstname}}</p>
                <p>{{$user->username}}</p>
                <p>Регистрация: август 2020 г.</p>
                <p>3 В читаемых</p>
                <p>0 Читатели</p>
            </div>
            <form action="{{route('profile.destroy', $user)}}" method="POST">
                <a href="{{route('profile.edit', $user)}}" class="btn btn-info" type="button">Настроит
                    профиль</a>
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Удалить профиль">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">Твиты</div>
        <div class="col-sm-3">Твиты и Ответы</div>
        <div class="col-sm-3">Медиа</div>
        <div class="col-sm-3">Нравится</div>
    </div>
</div>

@endsection