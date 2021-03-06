<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.2/css/mdb.min.css" />



        <title>{{config('app.name', 'LSAPP')}}</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-5">
                        @yield('content')
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.2/js/mdb.min.js"></script>
    </body>
</html>
