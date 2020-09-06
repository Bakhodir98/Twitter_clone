@extends('layouts.master')
@section('content')

<h1><b>Изменить пароль профиля {{$user->firstname}}</b></h1>

<form action="{{route('ChangePassword', $user)}}" method="POST">
    @csrf
    <div class="form-group">
        @if(session()->has('error'))
        <p class="alert alert-danger" style="text-align: center">{{session()->get('error')}}</p>
        @endif
        <label for="current_password">Пароль</label>
        {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
        @error('current_password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="password" class="form-control" name="current_password" id="current_password"
            placeholder="Введите пароль" value="">
    </div>
    <div class="form-group">
        <label for="new_password">Новый пароль</label>
        {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
        @error('new_password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="password" class="form-control" name="new_password" id="new_password"
            placeholder="Введите новый пароль" value="">
    </div>
    <div class="form-group">
        <label for="confirm_new_password">Подвердите новый пароль</label>
        {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
        @error('confirm_new_password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password"
            placeholder="Подвердите новый пароль" value="">
    </div>
    <button type="submit" class="btn btn-info">Сохранить</button>
</form>

@endsection