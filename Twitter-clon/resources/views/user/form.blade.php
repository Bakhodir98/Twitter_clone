@extends('layouts.master')
@section('content')
<h1><b>{{$user->firstname}}</b></h1>
<img src="{{Storage::url($user->image)}}" alt="Avatar" class="image__rounded">

<form method="POST" enctype="multipart/form-data" action="{{route('user.update', $user)}}">
    <div>
        @method('PUT')
        @csrf
        <div class="row">
            <label for="firstname" class="col-sm-6">Имя: </label>
            <div class="col-sm-6">
                {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
                @error('firstname')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{$user->firstname}}">
            </div>
        </div>
        <div class="row">
            <label for="lastname" class="col-sm-6">Фамилия: </label>
            <div class="col-sm-6">
                {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
                @error('lastname')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{$user->lastname}}">
            </div>
        </div>
        <div class="row">
            <label for="username" class="col-sm-6">Имя пользователя: </label>
            <div class="col-sm-6">
                {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
                @error('username')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">
            </div>
        </div>
        <div class="row">
            <label for="date_of_birth" class="col-sm-6">Дата рождения: </label>
            <div class="col-sm-6">
                {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
                @error('date_of_birth')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                    value="{{$user->date_of_birth}}">
            </div>
        </div>
        <div class="row">
            <label for="image" class="col-sm-6">Пароль: </label>
            <div class="col-sm-6">
                {{-- @dd($user); --}}
                <a type="button" class="btn btn-info" href="{{route('PasswordChangeForm',$user)}}">Изменить</a>
            </div>
        </div>
        <div class="row">
            <label for="image" class="col-sm-6">Аватар: </label>
            <div class="col-sm-6">
                <img src="{{Storage::url($user->image)}}" alt="" width="200px" height="200px">
                {{-- @include('auth.layouts.error', ['fieldName' => 'image']) --}}
                @error('image')
                <div class="alert alert-danger">{{$message}}
                </div>
                @enderror
                <input type="file" name="image" id="image">
            </div>
        </div>
        <button class="btn btn-info" type="submit">Сохранить</button>
    </div>
</form>

@endsection