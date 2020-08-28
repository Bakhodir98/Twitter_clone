@extends('layouts.master')
@section('content')
{{-- <div id="example"></div> --}}

<div><a href="{{route('home')}}">LOGIN</a></div>

{{-- <div id="app"></div>
<script src="/js/app.js"></script> --}}
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xm-6  padding_bootstrap">
            @include('sidebar')
        </div>
        <div class="col-md-3 col-sm-3 col-xm-3 padding_bootstrap">
            <div class="Feed">
                @include('home')
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xm-3 padding_bootstrap">
            <div cdlass="Widgets"></div>

        </div>
    </div>

</div>
@endsection