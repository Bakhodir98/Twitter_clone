{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div>
@endsection --}}
<div class="feed">
    <div class="feed__header">
        <h2>Home</h2>
    </div>
    <div class="tweetBox">
        <form>
            <div class="tweetBox__input">
                <img src="https://i.ytimg.com/vi/AHbpLXJL6EQ/hqdefault.jpg" class="image__rounded">
                <input placeholder="Что нового?" type="text">
            </div>
            <input class="tweetBox__imageInput" placeholder="Введите url рисунка" type="text">

            <button class="tweerBox_tweetButton">Tweet</button>
        </form>
    </div>
    @include('post')
</div>