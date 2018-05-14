<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>BasicWebsite</title>
</head>
<body>
    @include("inc.navbar")
    
    @if(Request::is("/"))
        @include("inc.showcase")
    @else
        <br>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield("content")
            </div>
            <div class="well col-md-4 col-lg-4">
                @include("inc.sidebar")
            </div>
        </div>
        <footer class="footer text-right"><p>Copyright &copy; 2018</p></footer>
    </div>

    
    <script src="/js/app.js"></script>
</body>
</html>