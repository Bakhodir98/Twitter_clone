@extends('profile')
@section('title', 'Редактировать профиль '.$user->firstname)
@section('content')
<div class="col-md-12">
    <h1>Редактировать профиль <b>{{$user->firstname}}</b></h1>

    <form method="POST" enctype="multipart/form-data" action="{{route('profile.update', $user)}}">
        <div>
            @method('PUT')
            @csrf
            <div class="input-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Имя: </label>
                <div class="col-sm-6">
                    {{-- @include('auth.layouts.error', ['fieldName' => 'code']) --}}
                    @error('firstname')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" name="firstname" id="firstname"
                        value="{{$user->firstname}}">
                </div>
            </div>
            <button class="btn btn-success">Сохранить</button>
        </div>
    </form>
</div>
@endsection