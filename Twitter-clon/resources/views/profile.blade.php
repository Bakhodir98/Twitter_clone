@extends('layouts.master')
@section('content')
{{-- <div id="example"></div> --}}

<div><a href="{{route('home')}}">LOGIN</a></div>

{{-- <div id="app"></div>
<script src="/js/app.js"></script> --}}
<div class="container">
    <div class="row">
        <div class="col-sm-3  padding_bootstrap">
            @include('sidebar')
        </div>
        <div class="col-sm-6 padding_bootstrap">
            <div class="Feed">
                <div class="profile">
                    @include('form')
                    {{-- <div class="header">
                        <h2>Bakhodir</h2>
                        <p>2 tweets</p>
                        <div class="wall">
                            <img src="" alt="">
                        </div>
                        <img src="" alt="" class="image__rounded">
                        <p>Bakhodir</p>
                        <p>@Bakhodir19998</p>
                        <p>Регистрация: август 2020 г.</p>
                        <p>3 В читаемых</p>
                        <p>0 Читатели</p>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-3">Твиты</div>
                        <div class="col-sm-3">Твиты и Ответы</div>
                        <div class="col-sm-3">Медиа</div>
                        <div class="col-sm-3">Нравится</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 padding_bootstrap">
            <div cdlass="Widgets"></div>

        </div>
    </div>

</div>
@endsection