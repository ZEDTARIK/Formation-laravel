<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link  href="{{ mix('/css/app.css')}}" rel="stylesheet">
        <link  href="{{ mix('/css/theme.css')}}" rel="stylesheet">
        <title>Laravel</title>
</head>
<body>
    <div class="container"  style="margin-top: 5px">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('posts.index')}}">Posts</a>
                <a class="navbar-brand" href="{{ route('employees.index')}}">Employees</a>
              </div>
            </div>
          </nav>
          
            <div class="row">
                <div class="col-md-12">
                    @if ( session()->has('status'))
                        <div class="alert alert-dismissible alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                </div>
            </div>

      @yield('content')
    
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
