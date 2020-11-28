<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <title>Laravel</title>
</head>
<body>
    <div class="container"  style="margin-top: 5px">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('posts.index')}}">Posts</a>
              </div>
            </div>
          </nav>
          
          <div class="jumbotron">
                <h1 class="text-center">Formation Laravel</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if ( session()->has('status'))
                        <div class="alert alert-success" role="alert">
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
