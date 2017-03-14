<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- TODO: アセットちゃんとやる -->
        <link rel="stylesheet" href="dist/css/app.css"></script>
        <link rel="stylesheet" href="css/app.css"></script>

        <script>
            window.Laravel = {};
            window.Laravel.csrfToken = "{{ csrf_token() }}";
        </script>
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
    </body>
    <script src="dist/js/app.js"></script>
    <script src="js/app.js"></script>
</html>
