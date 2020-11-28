<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <title>Laravel</title>
</head>
<body>

    @if ( session()->has('status'))
        <h4 style="color:green">
            {{ session()->get('status') }}
        </h4>
    @endif
    
    @yield('content')

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
