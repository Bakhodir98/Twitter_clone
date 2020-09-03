@extends('layouts.master')
@section('content')
<div class="feed">
    <h3>Поиск пользователья</h3>
    <h3 align="center">Общий результат: <span id="total_records"></span></h3>
    <input type="text" name="search" id="search" class="form-control" placeholder="Искать пользователья">
    <div class="row" id="users_data">
    </div>
</div>
@endsection