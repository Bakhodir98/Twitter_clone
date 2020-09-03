<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Clone - Социальный сеть</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/App.css')}} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/Sidebar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/SidebarOption.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/Feed.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/TweetBox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/Post.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/Widgets.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/Profile.css')}}" type="text/css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

</head>

<body>
    <div class="container">
        <div class="row" style="padding-top: 10px">
            <div class="col-sm-3">
                @include('sidebar')
            </div>
            <div class="col-sm-6">
                @yield('content')
            </div>
            <div class="col-sm-3">
                @include('widgets')
            </div>
        </div>
    </div>
</body>

</html>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        fetch_customer_data();
        function fetch_customer_data(query ='')
        {
            if(query != '')
            $.ajax({
                url:"{{ route('live_search.action')}}",
                method: 'GET',
                data:{'query':query},
                dataType: 'json',
                success:function(data)
                {
                    $('#users_data').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
        });
    })
</script>