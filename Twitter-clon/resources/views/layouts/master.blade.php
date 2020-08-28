<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/App.css">
    <link rel="stylesheet" href="css/Sidebar.css">
    <link rel="stylesheet" href="css/SidebarOption.css">
    <link rel="stylesheet" href="css/Feed.css">
    <link rel="stylesheet" href="css/TweetBox.css">
    <link rel="stylesheet" href="css/Post.css">
    <link rel="stylesheet" href="css/Widgets.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>
    @yield('content')
</body>

</html>